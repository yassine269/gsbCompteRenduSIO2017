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
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class MedicamentAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper->add('medDEPOTLEGAL', 'text');
        $formMapper->add('medNOMCOMMERCIAL', 'text');
        $formMapper->add('medCOMPOSITIONS', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
        ));
        $formMapper->add('medPRESCRIPTIONS', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $formMapper->add('medEFFETS', 'text');
        $formMapper->add('medCONTREINDIC', 'text');
        $formMapper->add('medPRIXECHANT', 'text');
        $formMapper->add('medPerturbe', 'entity', array(
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,

        ));
        $formMapper->add('medPerturbateur', 'entity', array(
            'class' => 'MainBundle\Entity\Medicament',
            'multiple' => true,
            'required' => false,
        ));
        $formMapper->add('medPRESENTATION', 'entity', array(
            'class' => 'MainBundle\Entity\Presentation',
            'multiple' => true,
            'required' => false,
        ));
        $formMapper->add('medFAMILLE', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Famille',
            'property' => 'famLIBELLE',
        ));


    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('medDEPOTLEGAL');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('medDEPOTLEGAL');
    }




}