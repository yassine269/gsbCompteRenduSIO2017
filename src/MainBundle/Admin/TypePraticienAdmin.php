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


class TypePraticienAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('typeCode', 'text',array(
            'label'=>'Code du type de praticien :'
        ));
        $formMapper->add('typeLibelle', 'text',array(
            'label'=>'Libéllé du type de praticien :'
        ));
        $formMapper->add('typeLieu', 'text',array(
            'label'=>'Lieu d\'exercice du praticien :'
        ));
    }

    protected function showLisFields(ShowMapper $showMapper)
    {
        $showMapper->add('typeCode', 'text',array(
            'label'=>'Code du type de praticien :'
        ));
        $showMapper->add('typeLibelle', 'text',array(
            'label'=>'Libéllé du type de praticien :'
        ));
        $showMapper->add('typeLieu', 'text',array(
            'label'=>'Lieu d\'exercice du praticien :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('typeLibelle');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('typeLibelle',null,array(
            'label'=>'Libéllé du type :'))
                    ->add('typeLieu',null,array(
                        'label'=>'Lieu d\'exercice :'
                    ))
                    ->add('',null,array(
                        'label'=>'Code du type de praticien :'
                    ))
        ;
    }


}