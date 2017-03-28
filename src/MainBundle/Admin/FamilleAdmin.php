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


class FamilleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('famCode', 'text',array(
            'label'=>'Code de la famille de médicament :'
        ));
        $formMapper->add('famLibelle', 'text',array(
            'label'=>'Libellé de la famille de médicament'
        ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('famCode', 'text',array(
            'label'=>'Code de la famille de médicament :'
        ));
        $listMapper->add('famLibelle', 'text',array(
            'label'=>'Libellé de la famille de médicament'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('famCode', 'text',array(
            'label'=>'Code de la famille de médicament :'
        ));
        $showMapper->add('famLibelle', 'text',array(
            'label'=>'Libellé de la famille de médicament'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('famLibelle');
    }



}