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


class SpecialiteAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('speLibelle', 'text',array(
            'label'=>'Libellé de la spécialité :'
            ));
    }

    protected function configureShowFields(ShowMapper  $showMapper)
    {
        $showMapper
            ->add('speLibelle', 'text',array(
            'label'=>'Libellé de la spécialité :'
            ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('speLibelle',null,array('label'=>'libellé'));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('speLibelle', 'text',array(
            'label'=>'Libellé de la spécialité :'
            ))
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array(),
                        'show' =>array()
                    )
                )
            );
    }
    public function validate(ErrorElement $errorElement,$object)
    {
        $errorElement
            ->with('speLibelle')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();

    }


}