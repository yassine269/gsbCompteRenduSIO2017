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
            'property' => 'id',
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
        $datagridMapper->add('presTypeIndiv','doctrine_orm_model_autocomplete',
            array(
                'label'=> "Type d'individus",
            ),null,
            array(
                'property'=>'typeIndLibelle',
                'multiple'=> true,
                'placeholder'=> "Libellé du type d'individu'"
            ));
        $datagridMapper->add('presDosage','doctrine_orm_model_autocomplete',
            array(
                'label'=> "Dosage",
            ),null,
            array(
                'property'=>'dosQuantite',
                'multiple'=> false,
                'placeholder'=> "Quantité"
            ));
    }

    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper->add('presDosage','many_to_one', array(
        'label' => 'Dosage :',
        'associated_property'=>'dosQuantite'
    ));
        $listMapper->add('presTypeIndiv','many_to_one', array(
            'label' => 'Type d\'individu :',
            'associated_property'=>'TypeIndLibelle'
        ));
        $listMapper->add('presPosologie', 'text',array(
            'label'=>'Posologie associé :'
        ));
        $listMapper->add('presMEd', 'sonata_type_model',array(
            'label'=>'Médicament associé :',
            'class'=>'MainBundle\Entity\Medicament',
            'associated_property'=>'medNomCommercial'
        ));

    }


}