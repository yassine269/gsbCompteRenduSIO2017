<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 21/02/2017
 * Time: 11:25
 */

namespace MainBundle\Admin;

use MainBundle\MainBundle;
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
        $formMapper->add('acLieu', 'text',
            array(
            'label'=> "Lieu de l'activité :"
        ));
        $formMapper->add('acTheme', 'text',
            array(
            'label'=> "Théme de l'activité :"
        ));
        $formMapper->add('acDate', 'date',
            array(
            'label'=> "Date de l'activité :"
        ));
        $formMapper->add('acPraticien', 'entity',
            array(
            'class' => 'MainBundle\Entity\Praticien',
            'multiple' => true,
            'required' => false,
            'label'=> "Praticens convoqués :"
        ));
        $formMapper->add('acActReal', 'sonata_type_collection',
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
        $listMapper->add('acLieu', 'text',
            array(
            'label'=> "Lieu de l'activité :"
        ));
        $listMapper->add('acTheme', 'text',
            array(
            'label'=> "Théme de l'activité :"
        ));
        $listMapper->add('acDate', 'date',
            array(
            'label'=> "Date de l'activité :"
        ));
        $listMapper->add('acPraticien', 'entity',
            array(
            'associated_property'=>'praNom',
            'class' => 'MainBundle\Entity\Praticien',
            'multiple' => true,
            'required' => false,
            'label'=> "Praticens convoqués :"
        ));
        $listMapper->add('acActReal', 'sonata_type_collection',
            array(
                'associated_property'=>'actReaVisiteur.usrNom',
                'by_reference' => false,
                'required' => false,
                'label'=> "Réalisation de l'activité:"
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $listMapper->add('acStates', 'text',
            array(
            'label'=> "Etat :"
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('acLieu', 'text',
            array(
            'label'=> "Lieu de l'activité :"
        ));
        $showMapper->add('acTheme', 'text',
            array(
            'label'=> "Théme de l'activité :"
        ));
        $showMapper->add('acDate', 'date',
            array(
            'label'=> "Date de l'activité :"
        ));
        $showMapper->add('acPraticien', 'entity',
            array(
            'associated_property'=>'praNom',
            'class' => 'MainBundle\Entity\Praticien',
            'multiple' => true,
            'required' => false,
            'label'=> "Praticens convoqués :"
        ));
        $showMapper->add('acActReal', 'sonata_type_collection',
            array(
                'associated_property'=>'actReaVisiteur.usrNom',
                'by_reference' => false,
                'required' => false,
                'label'=> "Réalisation de l'activité:"
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
        $showMapper->add('acStates', 'text',
            array(
            'label'=> "Etat :"
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('acLieu', null,
            array(
            'label'=> "Lieu de l'activité"
        ));
        $datagridMapper->add('acTheme', null,
            array(
            'label'=> "Théme de l'activité"
        ));
        $datagridMapper->add('acDate', null,
            array(
            'label'=> "Date de l'activité"
        ));
        $datagridMapper->add('acPraticien', 'doctrine_orm_model_autocomplete',
            array(
            'label'=> 'Praticens convoqués ',
            ),null,
            array(
                'property'=>'praNom',
                'multiple'=> true,
                'placeholder'=> 'Nom des praticiens'
            ));
        $datagridMapper->add('acActReal.actReaVisiteur', 'doctrine_orm_model_autocomplete',
            array(
                'label'=> "Equipes de réalisation ",
            ),null,
            array(
                'property'=>'usrNom',
                'multiple'=> true,
                'placeholder'=> 'Nom des visiteurs :'
            ));
        $datagridMapper->add('acStates', null, array(
            'label'=> "Etat "
        ));
    }

    public function preValidate($object){
        $actreas=$object->getAcActReal();
        $object->setAcStates('VALIDATION_REQUISE');
        foreach ($actreas as $actrea){
            $actrea->setActReaActCompl($object);
        }
    }


}