<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 11/04/2017
 * Time: 08:59
 */

namespace MainBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CRUDController extends Controller
{
    public function validActAction()
    {
        $object = $this->admin->getSubject();

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        // Be careful, you may need to overload the __clone method of your object
        // to set its id to null !
        $object->setAcStates('VALIDER');
        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($object);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        $this->addFlash('sonata_flash_success', 'Activité validée !');

        return new RedirectResponse($this->admin->generateUrl('list'));

        // if you have a filtered list and want to keep your filters after the redirect
        // return new RedirectResponse($this->admin->generateUrl('list', $this->admin->getFilterParameters()));
    }
    public function invalidActAction()
    {
        $object = $this->admin->getSubject();

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        // Be careful, you may need to overload the __clone method of your object
        // to set its id to null !
        $object->setAcStates('REFUSER');
        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($object);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        $this->addFlash('sonata_flash_success', 'Activité refusé !');

        return new RedirectResponse($this->admin->generateUrl('list'));

        // if you have a filtered list and want to keep your filters after the redirect
        // return new RedirectResponse($this->admin->generateUrl('list', $this->admin->getFilterParameters()));
    }

}