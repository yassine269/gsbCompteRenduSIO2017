<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 21/02/2017
 * Time: 11:25
 */

namespace MainBundle\Admin;

use MainBundle\Form\MedConstitutionType;
use MainBundle\MainBundle;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Sonata\CoreBundle\Validator\ErrorElement;


class MedicamentAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->add('medDepotLegal', 'text',array(
            'label'=>'Dépot légal du médicament :'
        ))
            ->add('medNomCommercial', 'text',array(
            'label'=>'Nom commercial du médicament :'
        ))
            ->add('medCompositions', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label' => 'Composants du médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
            ->add('medPrescriptions', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label' => 'Prescriptions liés au médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
            ->add('medEffets', 'text',array(
            'label'=>'Effet du médicament :'
            ))
            ->add('medContreIndic', 'text',array(
            'label'=>'Contre indication lié au médicament :'
            ))
            ->add('medPrixEchant', 'text',array(
            'label'=>'Prx de l\'échantillon du médicament :'
            ))
            ->add('medPerturbe', 'entity',
            array(
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Medicaments perturbés par ce médicament :'
            ))
            ->add('medPerturbateur', 'entity', array(
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Médicaments perturbant ce médicament :'
            ))
            ->add('medPresentation', 'entity', array(
            'class' => 'MainBundle\Entity\Presentation',
            'multiple' => true,
            'required' => false,
            'label' => 'Présentation du médicament :'
            ))
            ->add('medFamille', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Famille',
            'property' => 'famLibelle',
            'label' => 'Famille du médicament :',
            'btn_add'=>false,
            'btn_delete'=>false,
            'btn_catalogue'=>true
            ));


    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('medDepotLegal', 'text',array(
            'label'=>'Dépot légal du médicament :'
            ))
            ->add('medNomCommercial', 'text',array(
            'label'=>'Nom commercial du médicament :'
            ))
            ->add('medCompositions', 'sonata_type_collection',
            array(
                'associated_property'=>'constComposant',
                'by_reference' => false,
                'required' => false,
                'label' => 'Composants du médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
            ->add('medPrescriptions', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label' => 'Prescriptions liés au médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
            ->add('medEffets', 'text',array(
            'label'=>'Effet du médicament :'
            ))
            ->add('medContreIndic', 'text',array(
            'label'=>'Contre indication lié au médicament :'
            ))
            ->add('medPrixEchant', 'text',array(
            'label'=>'Prx de l\'échantillon du médicament :'
            ))
            ->add('medPerturbe', 'entity', array(
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Medicaments perturbés par ce médicament :'

            ))
            ->add('medPerturbateur', 'entity', array(
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Médicaments perturbant ce médicament :'
            ))
            ->add('medPresentation', 'entity', array(
            'class' => 'MainBundle\Entity\Presentation',
            'multiple' => true,
            'required' => false,
            'label' => 'Présentation du médicament :'
            ))
            ->add('medFamille', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Famille',
            'property' => 'famLibelle',
            'label' => 'Famille du médicament :'
            ));


    }
    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper
            ->addIdentifier('medDepotLegal', 'text',array(
            'label'=>'Dépot légal du médicament :'
            ))
             ->addIdentifier('medNomCommercial', 'text',array(
            'label'=>'Nom commercial du médicament :'
            ))
             ->add('medCompositions', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label' => 'Composants du médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
             ->add('medPrescriptions', 'sonata_type_collection',
            array(
                'associated_property'=>'presPosologie',
                'by_reference' => false,
                'required' => false,
                'label' => 'Prescriptions liés au médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
             ->add('medEffets', 'text',array(
            'label'=>'Effet du médicament :'
            ))
             ->add('medContreIndic', 'text',array(
            'label'=>'Contre indication lié au médicament :'
            ))
             ->add('medPrixEchant', 'text',array(
            'label'=>'Prx de l\'échantillon du médicament :'
            ))
             ->add('medPerturbe', 'entity', array(
            'associated_property'=>'medNomCommercial',
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Medicaments perturbés par ce médicament :'

            ))
             ->add('medPerturbateur', 'entity', array(
            'associated_property'=>'medNomCommercial',
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Médicaments perturbant ce médicament :'
            ))
             ->add('medPresentation', 'entity', array(
            'class' => 'MainBundle\Entity\Presentation',
            'multiple' => true,
            'required' => false,
            'label' => 'Présentation du médicament :'
            ))
             ->add('medFamille', 'sonata_type_model', array(
            'associated_property'=>'famLibelle',
            'class' => 'MainBundle\Entity\Famille',
            'property' => 'famLibelle',
            'label' => 'Famille du médicament :'
            ))
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' =>array()
                    )
                )
            );


    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('medDepotLegal',null,array('label'=>'Dépot légal'))
            ->add('medNomCommercial',null,array('label'=>'Nom commercial'))
            ->add('medEffets',null,array('label'=>'Efets'))
            ->add('medContreIndic',null,array('label'=>'Contre Indication'))
            ->add('medPrixEchant',null,array('label'=>'Prix échantillon'))
            ->add('medCompositions','doctrine_orm_model_autocomplete',
            array(
                'label'=> "Compositions",
            ),null,
            array(
                'property'=>'constComposant',
                'multiple'=> true,
                'placeholder'=> 'Nom du composant :'
            ))
            ->add('medPrescriptions','doctrine_orm_model_autocomplete',
            array(
                'label'=> "Prescriptions",
            ),null,
            array(
                'property'=>'presTypeIndiv',
                'multiple'=> true,
                'placeholder'=> "Type d'individus"
            ))
            ->add('medPerturbe','doctrine_orm_model_autocomplete',
            array(
                'label'=> "Médicament pérturber",
            ),null,
            array(
                'property'=>'medNomCommercial',
                'multiple'=> true,
                'placeholder'=> "Nom commercial du médicament"
            ))
            ->add('medPerturbateur','doctrine_orm_model_autocomplete',
            array(
                'label'=> "Médicament pérturbateur",
            ),null,
            array(
                'property'=>'medNomCommercial',
                'multiple'=> true,
                'placeholder'=> "Nom commercial du médicament"
            ))
            ->add('medPresentation','doctrine_orm_model_autocomplete',
            array(
                'label'=> "Présentation",
            ),null,
            array(
                'property'=>'preLibelle',
                'multiple'=> true,
                'placeholder'=> "Libellé de la présentation"
            ))
            ->add('medFamille','doctrine_orm_model_autocomplete',
            array(
                'label'=> "Famille",
            ),null,
            array(
                'property'=>'famLibelle',
                'multiple'=> false,
                'placeholder'=> "Libellé de la famille"
            ));
    }
    public function preValidate($object){
        $comp=$object->getMedCOMPOSITIONS();
        $prescriptions=$object->getMedPRESCRIPTIONS();
        foreach ($comp as $composant){
            $composant->setConstMEDICAMENT($object);
        }
        foreach ($prescriptions as $prescription) {
            $prescription->setPresMED($object);
        }

    }
    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('medDepotLegal')
            ->assertLength(array('min' => 4,'max'=> 50))
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('medNomCommercial')
            ->assertLength(array('min' => 4,'max'=> 50))
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('medEffets')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('medContreIndic')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('medPrixEchant')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('medFamille')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('medCompositions')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('medPrescriptions')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('medPerturbe')
            ->end()
            ->with('medPerturbateur')
            ->end()
            ->with('medPresentation')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
        ;
    }





}