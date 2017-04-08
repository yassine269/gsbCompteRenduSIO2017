<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 21/02/2017
 * Time: 11:25
 */

namespace OCUserBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class FonctionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('fonctLibelle', 'text');

    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('fonctLibelle');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('fonctLibelle')
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
            ->with('fonctLibelle')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();
    }




}