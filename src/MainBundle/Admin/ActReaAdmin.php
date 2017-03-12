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

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('actreaVISITEUR');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('actreaVISITEUR');
    }


}