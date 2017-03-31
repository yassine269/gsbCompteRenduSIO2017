<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 21/02/2017
 * Time: 11:25
 */

namespace MainBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Validator\ErrorElement;


class DosageAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('dosQuantite', 'number',array(
            'label'=>'Quantité :'
        ));
        $formMapper->add('dosUnite', 'text',array(
            'label'=>'Unité de mesure :'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('dosQuantite', 'number',array(
            'label'=>'Quantité :'
        ));
        $showMapper->add('dosUnite', 'text',array(
            'label'=>'Unité de mesure :'
        ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('dosQuantite', 'number',array(
            'label'=>'Quantité :'
        ));
        $listMapper->add('dosUnite', 'text',array(
            'label'=>'Unité de mesure :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('dosQuantite', null,array(
            'label'=>'Quantité'
        ));
        $datagridMapper->add('dosUnite', null,array(
            'label'=>'Unité de mesure'
        ));
    }
    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('dosQuantite')
                ->assertNotNull()
                ->assertNotBlank()
            ->end()
            ->with('dosUnite')
                ->assertLength(array('min' => 1,'max'=> 20))
                ->assertNotNull()
                ->assertNotBlank()
            ->end()
        ;
    }
    public function preValidate($object){
        $dosQ=$object->getDosQUANTITE();
        $dosU=$object->getDosUNITE();
        $object->setDosCODE($dosQ.' '.$dosU);
    }


}