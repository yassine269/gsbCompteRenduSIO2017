<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 27/03/2017
 * Time: 20:04
 */

namespace OCUserBundle\Security\Authentication\Provider;

use FOS\UserBundle\Model\UserInterface;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\NonceExpiredException;
use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;
use OCUserBundle\Security\Authentication\Token\WsseUserToken;

class WsseProvider implements AuthenticationProviderInterface
{
    private $userProvider;
    private $cachePool;

    public function __construct(UserProviderInterface $userProvider, CacheItemPoolInterface $cachePool )
    {
        $this->userProvider = $userProvider;
        $this->cachePool = $cachePool;
    }



    public function authenticate(TokenInterface $token)
    {
        $user = $this->userProvider->loadUserByUsername($token->getUsername());
        if(!$user){
            throw new AuthenticationException("Bad credentials... Did you forgot your username ?");
        }

        if ($user && $this->validateDigest($token->digest, $token->nonce, $token->created, $user->getPassword())) {
            $authenticatedToken = new WsseUserToken($user->getRoles());
            $authenticatedToken->setUser($user);
            return $authenticatedToken;
        }

        throw new AuthenticationException('The WSSE authentication failed.');
    }

    /**
     * This function is specific to Wsse authentication and is only used to help this example
     *
     * For more information specific to the logic here, see
     * https://github.com/symfony/symfony-docs/pull/3134#issuecomment-27699129
     */
    protected function validateDigest($digest, $nonce, $created, $secret)
    {
        // Check created time is not in the future
        if (strtotime($created) > (time()+2) ) {
            throw new AuthenticationException("Back to the future...".strtotime($created).'  OOOOPPP  '.(time()+2));
        }

        // Expire timestamp after 5 minutes
        if (time() - strtotime($created) > 300) {
            throw new AuthenticationException("Too late for this timestamp... Watch your watch.");
        }

        // Try to fetch the cache item from pool
        $cacheItem = $this->cachePool->getItem(md5($nonce));

        // Validate that the nonce is *not* in cache
        // if it is, this could be a replay attack
        if ($cacheItem->isHit()) {
            throw new NonceExpiredException('Previously used nonce detected');
        }

        // Store the item in cache for 5 minutes
        $cacheItem->set(null)->expiresAfter(300);
        $this->cachePool->save($cacheItem);

        // Validate Secret
        $expected = base64_encode(sha1(base64_decode($nonce).$created.$secret, true));
        /*
        $password = 'testrests.testrests';
        $salt = 'sscIg61k7Br3LX03.PUJCnZQwGxDU6qJ2.fZehnhUGI';
        $salted = $password.'{'.$salt.'}';
        $digestB = hash('sha512', $salted, true);
        for ($i=1; $i<5000; $i++) {
            $digestB = hash('sha512', $digestB.$salted, true);
        }
*/

        if($digest !== $expected){
            throw new AuthenticationException("Bad credentials ! Digest is not as expected.".$digest.': EXP : '.$expected.': Hash :'.$secret);
        }

        return hash_equals($expected, $digest);
    }

    public function supports(TokenInterface $token)
    {
        return $token instanceof WsseUserToken;
    }
    protected function getSalt(UserInterface $user)
    {
        return $user->getSalt();
    }
}