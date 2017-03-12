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


class RegionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('regCODE', 'text');
        $formMapper->add('regLIBELLE', 'text');
        $formMapper->add('regSECTEUR', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Secteur',
            'property'=>'secLIBELLE',
            'required' => false,
        ));
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('regLIBELLE');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('regLIBELLE');

    }




}