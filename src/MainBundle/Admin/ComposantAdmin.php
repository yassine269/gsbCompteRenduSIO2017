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


class ComposantAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('compCode', 'text',array(
            'label'=>'Code de la composant :'
        ));
        $formMapper->add('compLibelle', 'text',array(
            'label'=>'Libellé du composant :'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('compCode', 'text',array(
            'label'=>'Code de la composant :'
        ));
        $showMapper->add('compLibelle', 'text',array(
            'label'=>'Libellé du composant :'
        ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('compCode', 'text',array(
            'label'=>'Code de la composant :'
        ));
        $listMapper->add('compLibelle', 'text',array(
            'label'=>'Libellé du composant :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('compLibelle');
    }



}