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



class ComposantAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('compLibelle', 'text',array(
            'label'=>'Libellé du composant :'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('compLibelle', 'text',array(
            'label'=>'Libellé du composant :'
        ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('compLibelle', 'text',array(
            'label'=>'Libellé du composant :'
            ))
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' =>array()
                    )
                )
            );
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('compLibelle',null,array('label'=>'Libellé du composant'));
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('compLibelle')
                ->assertLength(array('min' => 4,'max'=> 40))
                ->assertNotNull()
                ->assertNotBlank()
            ->end()
        ;
    }



}