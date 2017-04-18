<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MainBundle\Block;

use Sonata\BlockBundle\Block\Service\BlockServiceInterface;
use Sonata\CoreBundle\Model\Metadata;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;


use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Validator\ErrorElement;
use Sonata\BlockBundle\Block\Service\AbstractBlockService;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Sonata\BlockBundle\Block\BaseBlockService;

/**
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
class NotifBlockService extends AbstractBlockService
{
    /**
     * {@inheritdoc}
     */
    public function configureSettings(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'title' => 'Insert the rss title',
            'template' => 'MainBundle:Block:block_core_notif.html.twig',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
    {
        $formMapper->add('settings', 'sonata_type_immutable_array', array(
            'keys' => array(
                array('title', 'text', array('required' => false)),
            ),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
    {
        $errorElement
            ->with('settings[title]')
            ->assertNotNull(array())
            ->assertNotBlank()
            ->assertLength(array('max' => 50))
            ->end();
    }
    public function __construct($type,$templating,$em,$authChecker,$secureToken)
    {
        $this->type = $type;
        $this->templating = $templating;
        $this->em = $em;
        $this->authChecker = $authChecker;
        $this->secureToken = $secureToken;

    }

    /**
     * {@inheritdoc}
     */
    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {

        // RECUPERATION DE L'UTILISATEUR COURANT
        $user = $this->secureToken->getToken()->getUser();
        $data = $this->em->getRepository("MainBundle:Notification")->findBy(array('notifUser'=>$user));
        return $this->renderResponse($blockContext->getTemplate(), array(
            'user' => $user,
            'data'=>$data,
            'block' => $blockContext->getBlock(),
        ), $response);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockMetadata($code = null)
    {
        return new Metadata($this->getName(), (!is_null($code) ? $code : $this->getName()), false, 'SonataBlockBundle', array(
            'class' => 'fa fa-rss-square',
        ));
    }
}
