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
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class DepartementAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('depCode', 'text',array(
            'label'=>'Code de département :'
        ));
        $formMapper->add('depLibelle', 'text', array(
            'label'=>'Libéllé du départment'
        ));
        $formMapper->add('depRegion', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Region',
            'property'=>'regLibelle',
            'required' => false,
        ));
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('depLibelle');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('depLibelle');

    }




}