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


class SpecialiteAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('speCode', 'text',array(
            'label'=>'Code de la spécialité :'
        ));
        $formMapper->add('speLibelle', 'text',array(
            'label'=>'Libéllé de la spécialité :'
        ));
    }

    protected function configureShowFields(ShowMapper  $showMapper)
    {
        $showMapper->add('speCode', 'text',array(
            'label'=>'Code de la spécialité :'
        ));
        $showMapper->add('speLibelle', 'text',array(
            'label'=>'Libéllé de la spécialité :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('speLibelle');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('speCode', 'text',array(
            'label'=>'Code de la spécialité :'
        ));
        $listMapper->add('speLibelle', 'text',array(
            'label'=>'Libéllé de la spécialité :'
        ));
    }


}