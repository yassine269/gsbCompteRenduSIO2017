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


class ActReaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('actreaVISITEUR', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\User',
            'property' => 'usrMATRICULE',
            'label'=>'Visiteur( (co)organisateur :'
        ));
        $formMapper->add('actreaBUDGET', 'number',array(
            'label'=>'Budget alloué a cette organisateur :'
        ));

    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('actreaVISITEUR', 'sonata_type_model', array(
            'associated_property'=>'usrNOM',
            'class' => 'OCUserBundle\Entity\User',
            'property' => 'usrMATRICULE',
            'label'=>'Visiteur( (co)organisateur :'
        ));
        $listMapper->add('actreaBUDGET', 'number',array(
            'label'=>'Budget alloué a cette organisateur :'
        ));

    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('actreaVISITEUR', 'sonata_type_model', array(
            'associated_property'=>'usrNOM',
            'class' => 'OCUserBundle\Entity\User',
            'property' => 'usrMATRICULE',
            'label'=>'Visiteur( (co)organisateur :'
        ));
        $showMapper->add('actreaBUDGET', 'number',array(
            'label'=>'Budget alloué a cette organisateur :'
        ));

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('actreaVISITEUR');
    }



}