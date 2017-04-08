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


class TypeIndividuAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('TypeIndLibelle', 'text',array(
            'label'=>'Libellé du type d\'individu :'
        ));
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('TypeIndLibelle', 'text',array(
            'label'=>'Libellé du type d\'individu :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('TypeIndLibelle',null,array('label'=>'Libellé'));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('TypeIndLibelle',null,array(
            'label'=>'Libéllé du type d\'individu :'
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
            ->with('typeIndLibelle')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();

    }


}