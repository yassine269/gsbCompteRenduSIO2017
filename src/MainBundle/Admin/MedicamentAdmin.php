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


class MedicamentAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper->add('medDepotLegal', 'text',array(
            'label'=>'Dépot légal du médicament :'
        ));
        $formMapper->add('medNomCommercial', 'text',array(
            'label'=>'Nom commercial du médicament :'
        ));
        $formMapper->add('medCompositions', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label' => 'Composants du médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
        ));
        $formMapper->add('medPrescriptions', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label' => 'Prescriptions liés au médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $formMapper->add('medEffets', 'text',array(
            'label'=>'Effet du médicament :'
        ));
        $formMapper->add('medContreIndic', 'text',array(
            'label'=>'Contre indication lié au médicament :'
        ));
        $formMapper->add('medPrixEchant', 'text',array(
            'label'=>'Prx de l\'échantillon du médicament :'
        ));
        $formMapper->add('medPerturbe', 'entity',
            array(
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Medicaments perturbés par ce médicament :'
        ));
        $formMapper->add('medPerturbateur', 'entity', array(
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Médicaments perturbant ce médicament :'
        ));
        $formMapper->add('medPresentation', 'entity', array(
            'class' => 'MainBundle\Entity\Presentation',
            'multiple' => true,
            'required' => false,
            'label' => 'Présentation du médicament :'
        ));
        $formMapper->add('medFamille', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Famille',
            'property' => 'famLibelle',
            'label' => 'Famille du médicament :'
        ));


    }
    protected function configureShowFields(ShowMapper $showMapper)
    {

        $showMapper->add('medDepotLegal', 'text',array(
            'label'=>'Dépot légal du médicament :'
        ));
        $showMapper->add('medNomCommercial', 'text',array(
            'label'=>'Nom commercial du médicament :'
        ));
        $showMapper->add('medCompositions', 'sonata_type_collection',
            array(
                'associated_property'=>'constComposant',
                'by_reference' => false,
                'required' => false,
                'label' => 'Composants du médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $showMapper->add('medPrescriptions', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label' => 'Prescriptions liés au médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $showMapper->add('medEffets', 'text',array(
            'label'=>'Effet du médicament :'
        ));
        $showMapper->add('medContreIndic', 'text',array(
            'label'=>'Contre indication lié au médicament :'
        ));
        $showMapper->add('medPrixEchant', 'text',array(
            'label'=>'Prx de l\'échantillon du médicament :'
        ));
        $showMapper->add('medPerturbe', 'entity', array(
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Medicaments perturbés par ce médicament :'

        ));
        $showMapper->add('medPerturbateur', 'entity', array(
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Médicaments perturbant ce médicament :'
        ));
        $showMapper->add('medPresentation', 'entity', array(
            'class' => 'MainBundle\Entity\Presentation',
            'multiple' => true,
            'required' => false,
            'label' => 'Présentation du médicament :'
        ));
        $showMapper->add('medFamille', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Famille',
            'property' => 'famLibelle',
            'label' => 'Famille du médicament :'
        ));


    }
    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper->add('medDepotLegal', 'text',array(
            'label'=>'Dépot légal du médicament :'
        ));
        $listMapper->add('medNomCommercial', 'text',array(
            'label'=>'Nom commercial du médicament :'
        ));
        $listMapper->add('medCompositions', 'sonata_type_collection',
            array(
                'associated_property'=>'constComposant.compLibelle',
                'by_reference' => false,
                'required' => false,
                'label' => 'Composants du médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $listMapper->add('medPrescriptions', 'sonata_type_collection',
            array(
                'associated_property'=>'presPosologie',
                'by_reference' => false,
                'required' => false,
                'label' => 'Prescriptions liés au médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $listMapper->add('medEffets', 'text',array(
            'label'=>'Effet du médicament :'
        ));
        $listMapper->add('medContreIndic', 'text',array(
            'label'=>'Contre indication lié au médicament :'
        ));
        $listMapper->add('medPrixEchant', 'text',array(
            'label'=>'Prx de l\'échantillon du médicament :'
        ));
        $listMapper->add('medPerturbe', 'entity', array(
            'associated_property'=>'medNomCommercial',
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Medicaments perturbés par ce médicament :'

        ));
        $listMapper->add('medPerturbateur', 'entity', array(
            'associated_property'=>'medNomCommercial',
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Médicaments perturbant ce médicament :'
        ));
        $listMapper->add('medPresentation', 'entity', array(
            'class' => 'MainBundle\Entity\Presentation',
            'multiple' => true,
            'required' => false,
            'label' => 'Présentation du médicament :'
        ));
        $listMapper->add('medFamille', 'sonata_type_model', array(
            'associated_property'=>'famLibelle',
            'class' => 'MainBundle\Entity\Famille',
            'property' => 'famLibelle',
            'label' => 'Famille du médicament :'
        ));


    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('medDepotLegal');
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




}