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
use Sonata\CoreBundle\Validator\ErrorElement;


class PrescrireAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->add('presDosage', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Dosage',
            'label' => 'Dosage :',
            'btn_add'=>false,
            'btn_delete'=>false,
            'btn_catalogue'=>true
            ))
            ->add('presTypeIndiv', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypeIndividu',
            'property' => 'TypeIndLibelle',
            'label' => 'Type d\'individu concerné :',
            'btn_add'=>false,
            'btn_delete'=>false,
            'btn_catalogue'=>true
            ))
            ->add('presPosologie', 'text',array(
            'label'=>'Posologie associé :'
        ));

    }
    protected function configureShowFields(ShowMapper $showMapper)
    {

        $showMapper
            ->add('presDosage', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Dosage',
            'property' => 'id',
            'label' => 'Dosage :'
            ))
            ->add('presTypeIndiv', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypeIndividu',
            'property' => 'TypeIndLibelle',
            'label' => 'Type d\'individu concerné :'
            ))
            ->add('presPosologie', 'text',array(
            'label'=>'Posologie associé :'
            ));

    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('presTypeIndiv','doctrine_orm_model_autocomplete',
            array(
                'label'=> "Type d'individus",
            ),null,
            array(
                'property'=>'typeIndLibelle',
                'multiple'=> true,
                'placeholder'=> "Libellé du type d'individu'"
            ))
            ->add('presDosage','doctrine_orm_model_autocomplete',
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

        $listMapper
            ->add('presDosage','many_to_one', array(
            'label' => 'Dosage :',
            'associated_property'=>'dosQuantite'
            ))
            ->add('presTypeIndiv','many_to_one', array(
            'label' => 'Type d\'individu :',
            'associated_property'=>'TypeIndLibelle'
            ))
            ->add('presPosologie', 'text',array(
            'label'=>'Posologie associé :'
            ))
            ->add('presMed', 'sonata_type_model',array(
            'label'=>'Médicament associé :',
            'class'=>'MainBundle\Entity\Medicament',
            'associated_property'=>'medNomCommercial'
            ))
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' =>array()
                    )
                )
            );

    }
    public function validate(ErrorElement $errorElement,$object)
    {
        $errorElement
            ->with('presDosage')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('presTypeInd')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('presPosologie')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('presMed')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();
    }


}