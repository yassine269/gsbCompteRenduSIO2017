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


class ActComplAdmin extends AbstractAdmin
{
    protected $baseRouteName = 'action';

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('acLIEU', 'text', array(
            'label'=> "Lieu de l'activité :"
        ));
        $formMapper->add('acTHEME', 'text', array(
            'label'=> "Théme de l'activité :"
        ));
        $formMapper->add('acDATE', 'date', array(
            'label'=> "Date de l'activité :"
        ));
        $formMapper->add('acPRATICIEN', 'entity', array(
            'class' => 'MainBundle\Entity\Praticien',
            'multiple' => true,
            'required' => false,
            'label'=> "Praticens convoqués :"
        ));
        $formMapper->add('acACTREAS', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label'=> "Réalisation de l'activité:"
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('acLIEU', 'text', array(
            'label'=> "Lieu de l'activité :"
        ));
        $listMapper->add('acTHEME', 'text', array(
            'label'=> "Théme de l'activité :"
        ));
        $listMapper->add('acDATE', 'date', array(
            'label'=> "Date de l'activité :"
        ));
        $listMapper->add('acPRATICIEN', 'entity', array(
            'associated_property'=>'praNOM',
            'class' => 'MainBundle\Entity\Praticien',
            'multiple' => true,
            'required' => false,
            'label'=> "Praticens convoqués :"
        ));
        $listMapper->add('acACTREAS', 'sonata_type_collection',
            array(
                'associated_property'=>'actreaVISITEUR.usrNOM',
                'by_reference' => false,
                'required' => false,
                'label'=> "Réalisation de l'activité:"
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('acLIEU', 'text', array(
            'label'=> "Lieu de l'activité :"
        ));
        $showMapper->add('acTHEME', 'text', array(
            'label'=> "Théme de l'activité :"
        ));
        $showMapper->add('acDATE', 'date', array(
            'label'=> "Date de l'activité :"
        ));
        $showMapper->add('acPRATICIEN', 'entity', array(
            'associated_property'=>'praNOM',
            'class' => 'MainBundle\Entity\Praticien',
            'multiple' => true,
            'required' => false,
            'label'=> "Praticens convoqués :"
        ));
        $showMapper->add('acACTREAS', 'sonata_type_collection',
            array(
                'associated_property'=>'actreaVISITEUR.usrNOM',
                'by_reference' => false,
                'required' => false,
                'label'=> "Réalisation de l'activité:"
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('acDATE');
    }

    public function preValidate($object){
        $actreas=$object->getAcACTREAS();
        $object->setStates('VALIDATION_REQUISE');
        foreach ($actreas as $actrea){
            $actrea->setActreaACTCOMPL($object);
        }
    }


}