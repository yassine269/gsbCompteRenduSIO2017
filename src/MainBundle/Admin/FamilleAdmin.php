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
        $formMapper->add('famCODE', 'text',array(
            'label'=>'Code de la famille de médicament :'
        ));
        $formMapper->add('famLIBELLE', 'text',array(
            'label'=>'Libellé de la famille de médicament'
        ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('famCODE', 'text',array(
            'label'=>'Code de la famille de médicament :'
        ));
        $listMapper->add('famLIBELLE', 'text',array(
            'label'=>'Libellé de la famille de médicament'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('famCODE', 'text',array(
            'label'=>'Code de la famille de médicament :'
        ));
        $showMapper->add('famLIBELLE', 'text',array(
            'label'=>'Libellé de la famille de médicament'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('famLIBELLE');
    }



}