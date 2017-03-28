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


class PrescrireAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper->add('presDosage', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Dosage',
            'property' => 'dosCode',
            'label' => 'Dosage :'
        ));
        $formMapper->add('presTypeIndiv', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypeIndividu',
            'property' => 'TypeIndLibelle',
            'label' => 'Type d\'individu concerné :'
        ));
        $formMapper->add('presPosologie', 'text',array(
            'label'=>'Posologie associé :'
        ));

    }

    protected function configureShowFields(ShowMapper $showMapper)
    {

        $showMapper->add('presDosage', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Dosage',
            'property' => 'dosCode',
            'label' => 'Dosage :'
        ));
        $showMapper->add('presTypeIndiv', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypeIndividu',
            'property' => 'TypeIndLibelle',
            'label' => 'Type d\'individu concerné :'
        ));
        $showMapper->add('presPosologie', 'text',array(
            'label'=>'Posologie associé :'
        ));

    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('presMed');
    }

    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper->add('presDosage','many_to_one', array(
        'label' => 'Type du praticien :',
        'associated_property'=>'dosLIBELLE'
    ));
        $listMapper->add('presTypeIndiv','many_to_one', array(
            'label' => 'Type d\'individu :',
            'associated_property'=>'TypeIndLibelle'
        ));
        $listMapper->add('presPosologie', 'text',array(
            'label'=>'Posologie associé :'
        ));

    }


}