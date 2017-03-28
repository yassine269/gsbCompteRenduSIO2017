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


class SecteurAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('secCode', 'text');
        $formMapper->add('secLibelle', 'text');
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('secLibelle');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('secLibelle');

    }




}