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

        $formMapper->add('medDEPOTLEGAL', 'text',array(
            'label'=>'Dépot légal du médicament :'
        ));
        $formMapper->add('medNOMCOMMERCIAL', 'text',array(
            'label'=>'Nom commercial du médicament :'
        ));
        $formMapper->add('medCOMPOSITIONS', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label' => 'Composants du médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
        ));
        $formMapper->add('medPRESCRIPTIONS', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label' => 'Prescriptions liés au médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $formMapper->add('medEFFETS', 'text',array(
            'label'=>'Effet du médicament :'
        ));
        $formMapper->add('medCONTREINDIC', 'text',array(
            'label'=>'Contre indication lié au médicament :'
        ));
        $formMapper->add('medPRIXECHANT', 'text',array(
            'label'=>'Prx de l\'échantillon du médicament :'
        ));
        $formMapper->add('medPerturbe', 'entity', array(
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
        $formMapper->add('medPRESENTATION', 'entity', array(
            'class' => 'MainBundle\Entity\Presentation',
            'multiple' => true,
            'required' => false,
            'label' => 'Présentation du médicament :'
        ));
        $formMapper->add('medFAMILLE', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Famille',
            'property' => 'famLIBELLE',
            'label' => 'Famille du médicament :'
        ));


    }
    protected function configureShowFields(ShowMapper $showMapper)
    {

        $showMapper->add('medDEPOTLEGAL', 'text',array(
            'label'=>'Dépot légal du médicament :'
        ));
        $showMapper->add('medNOMCOMMERCIAL', 'text',array(
            'label'=>'Nom commercial du médicament :'
        ));
        $showMapper->add('medCOMPOSITIONS', 'sonata_type_collection',
            array(
                'associated_property'=>'constCOMPOSANT',
                'by_reference' => false,
                'required' => false,
                'label' => 'Composants du médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $showMapper->add('medPRESCRIPTIONS', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label' => 'Prescriptions liés au médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $showMapper->add('medEFFETS', 'text',array(
            'label'=>'Effet du médicament :'
        ));
        $showMapper->add('medCONTREINDIC', 'text',array(
            'label'=>'Contre indication lié au médicament :'
        ));
        $showMapper->add('medPRIXECHANT', 'text',array(
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
        $showMapper->add('medPRESENTATION', 'entity', array(
            'class' => 'MainBundle\Entity\Presentation',
            'multiple' => true,
            'required' => false,
            'label' => 'Présentation du médicament :'
        ));
        $showMapper->add('medFAMILLE', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Famille',
            'property' => 'famLIBELLE',
            'label' => 'Famille du médicament :'
        ));


    }
    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper->add('medDEPOTLEGAL', 'text',array(
            'label'=>'Dépot légal du médicament :'
        ));
        $listMapper->add('medNOMCOMMERCIAL', 'text',array(
            'label'=>'Nom commercial du médicament :'
        ));
        $listMapper->add('medCOMPOSITIONS', 'sonata_type_collection',
            array(
                'associated_property'=>'constCOMPOSANT.compLIBELLE',
                'by_reference' => false,
                'required' => false,
                'label' => 'Composants du médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $listMapper->add('medPRESCRIPTIONS', 'sonata_type_collection',
            array(
                'associated_property'=>'presPOSOLOGIE',
                'by_reference' => false,
                'required' => false,
                'label' => 'Prescriptions liés au médicament :'
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $listMapper->add('medEFFETS', 'text',array(
            'label'=>'Effet du médicament :'
        ));
        $listMapper->add('medCONTREINDIC', 'text',array(
            'label'=>'Contre indication lié au médicament :'
        ));
        $listMapper->add('medPRIXECHANT', 'text',array(
            'label'=>'Prx de l\'échantillon du médicament :'
        ));
        $listMapper->add('medPerturbe', 'entity', array(
            'associated_property'=>'medNOMCOMMERCIAL',
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Medicaments perturbés par ce médicament :'

        ));
        $listMapper->add('medPerturbateur', 'entity', array(
            'associated_property'=>'medNOMCOMMERCIAL',
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
            'label' => 'Médicaments perturbant ce médicament :'
        ));
        $listMapper->add('medPRESENTATION', 'entity', array(
            'class' => 'MainBundle\Entity\Presentation',
            'multiple' => true,
            'required' => false,
            'label' => 'Présentation du médicament :'
        ));
        $listMapper->add('medFAMILLE', 'sonata_type_model', array(
            'associated_property'=>'famLIBELLE',
            'class' => 'MainBundle\Entity\Famille',
            'property' => 'famLIBELLE',
            'label' => 'Famille du médicament :'
        ));


    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('medDEPOTLEGAL');
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