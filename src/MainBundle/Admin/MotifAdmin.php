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

class MotifAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('motifLibelle', 'text',array(
            'label'=>'Libéllé du motif :'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('motifLibelle', 'text',array(
            'label'=>'Libéllé du motif :'
        ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('motifLibelle', 'text',array(
            'label'=>'Libéllé du motif :'
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
        $datagridMapper->add('motifLibelle',null,array('label'=>'Libellé'));
    }
    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('motifLibelle')
            ->assertLength(array('min' => 4,'max'=> 20))
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
        ;
    }



}