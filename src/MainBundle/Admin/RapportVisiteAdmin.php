<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 21/02/2017
 * Time: 11:25
 */

namespace MainBundle\Admin;

use Doctrine\DBAL\Types\DateType;
use MainBundle\Form\MedConstitutionType;
use MainBundle\MainBundle;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class RapportVisiteAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->with('Informations générales :', array('class' => 'col-md-9'))
                ->add('rapDATE', 'date',array(
                'label'=>'Date de la visite :'))
                ->add('rapVISITEUR', 'sonata_type_model', array(
                'class' => 'OCUserBundle\Entity\User',
                'property' => 'usrNOM',
                'label' => 'Visiteur :'))
                ->add('rapPRATICIEN', 'sonata_type_model', array(
                    'class' => 'MainBundle\Entity\Praticien',
                    'property' => 'praNOM',
                    'label' => 'Praticien :'))
                ->add('rapMOTIF', 'sonata_type_model', array(
                    'class' => 'MainBundle\Entity\Motif',
                    'property' => 'motifLIBELLE',
                    'label' => 'motif de la visite :'))
                ->add('rapECHANTILLONS', 'sonata_type_collection',
                    array(
                        'by_reference' => false,
                        'required' => false,
                        'label' => 'Echantillons offerts :'
                    ), array(
                        'edit' => 'inline',
                        'inline' => 'table',))
            ->end();

        $formMapper
            ->with('Bian de la visite :', array('class' => 'col-md-3'))
                ->add('rapBILAN', 'textarea',array(
                'label'=>'Bilan de la visite :'))
                ->add('rapCOEFIMPACT', 'integer',array(
                'label'=>'Coefiscient d\'impact de la visite :'))
            ->end();


    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('rapVISITEUR',null,array(
            'label'=>'Rédacteur'
        ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('rapVISITEUR','many_to_one',array(
                'label'=>'Rédacteur :',
                'associated_property'=>'usrNOM'
            ))
            ->add('rapDATE','date', array(
            'pattern' => 'dd MMM y G',
            'locale' => 'fr',
            'timezone' => 'Europe/Paris',
            'label' => 'Date de la visite :'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper){
        $showMapper
            ->with('Informations générales :', array('class' => 'col-md-6'))
            ->add('rapDATE', 'date',array(
                'label'=>'Date de la visite :'))
            ->add('rapVISITEUR', 'sonata_type_model', array(
                'class' => 'OCUserBundle\Entity\User',
                'property' => 'usrNOM',
                'label' => 'Visiteur :'))
            ->add('rapPRATICIEN', 'sonata_type_model', array(
                'class' => 'MainBundle\Entity\Praticien',
                'property' => 'praNOM',
                'label' => 'Praticien :'))
            ->add('rapMOTIF', 'sonata_type_model', array(
                'class' => 'MainBundle\Entity\Motif',
                'property' => 'motifLIBELLE',
                'associated_property' => 'motifLIBELLE',
                'label' => 'motif de la visite :'))
            ->add('rapECHANTILLONS', 'sonata_type_collection',
                array(
                    'by_reference' => false,
                    'required' => false,
                    'label' => 'Echantillons offerts :'
                ), array(
                    'edit' => 'inline',
                    'inline' => 'table',))
            ->end();

        $showMapper
            ->with('Bian de la visite :', array('class' => 'col-md-6'))
            ->add('rapBILAN', 'textarea',array(
                'label'=>'Bilan de la visite :'))
            ->add('rapCOEFIMPACT', 'integer',array(
                'label'=>'Coefiscient d\'impact de la visite :'))
            ->end();
    }



}