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


class TypePraticienAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('typeCODE', 'text',array(
            'label'=>'Code du type de praticien :'
        ));
        $formMapper->add('typeLIBELLE', 'text',array(
            'label'=>'Libéllé du type de praticien :'
        ));
        $formMapper->add('typeLIEU', 'text',array(
            'label'=>'Lieu d\'exercice du praticien :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('typeLIBELLE');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('typeLIBELLE');
    }


}