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
use Sonata\CoreBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Show\ShowMapper;


class ActComplAdmin extends AbstractAdmin
{
    protected $baseRouteName = 'action';
    // CONFIGURATION DES CHAMP DU FORMULAIRE CREATION / EDITION
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('acLieu', 'text',
            array(
            'label'=> "Lieu de l'activité :"
            ))
            ->add('acTheme', 'text',
            array(
            'label'=> "Théme de l'activité :"
            ))
            ->add('acDate', 'date',
            array(
            'label'=> "Date de l'activité :"
            ))
            ->add('acPraticien', 'entity',
            array(
            'class' => 'MainBundle\Entity\Praticien',
            'multiple' => true,
            'required' => false,
            'label'=> "Praticens convoqués :"
            ))
            ->add('acActReal', 'sonata_type_collection',
            array(
                'by_reference' => false,
                'required' => false,
                'label'=> "Réalisation de l'activité:"
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
    }
    // CONFIGURATION DES CHAMPS DE L'ACTION "LIST"
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('acLieu', 'text',
            array(
            'label'=> "Lieu de l'activité :"
        ))
            ->add('acTheme', 'text',
            array(
            'label'=> "Théme de l'activité :"
        ))
            ->add('acDate', 'date',
            array(
            'label'=> "Date de l'activité :"
        ))
            ->add('acPraticien', 'entity',
            array(
            'associated_property'=>'praNom',
            'class' => 'MainBundle\Entity\Praticien',
            'multiple' => true,
            'required' => false,
            'label'=> "Praticens convoqués :"
        ))
            ->add('acActReal', 'sonata_type_collection',
            array(
                'associated_property'=>'actReaVisiteur.usrNom',
                'by_reference' => false,
                'required' => false,
                'label'=> "Réalisation de l'activité:"
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
            ->add('acStates', 'text',
            array(
            'label'=> "Etat :"
        ))
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array(
                            'template' => 'MainBundle:List:list_action_edit_actCompl.html.twig',
                        ),
                        'show' =>array()
                    )
                )
            );
    }
    // CONFIGURATION DES CHAMPS DE L'ACTION "SHOW"
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('acLieu', 'text',
            array(
            'label'=> "Lieu de l'activité :"
            ))
            ->add('acTheme', 'text',
            array(
            'label'=> "Théme de l'activité :"
            ))
            ->add('acDate', 'date',
            array(
            'label'=> "Date de l'activité :"
            ))
            ->add('acPraticien', 'entity',
            array(
            'associated_property'=>'praNom',
            'class' => 'MainBundle\Entity\Praticien',
            'multiple' => true,
            'required' => false,
            'label'=> "Praticens convoqués :"
            ))
            ->add('acActReal', 'sonata_type_collection',
            array(
                'associated_property'=>'actReaVisiteur.usrNom',
                'by_reference' => false,
                'required' => false,
                'label'=> "Réalisation de l'activité:"
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
            ->add('acStates', 'text',
            array(
            'label'=> "Etat :"
        ));
    }
    // CONFIGURATION DES FILTRES
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('acLieu', null,
            array(
            'label'=> "Lieu de l'activité"
            ))
            ->add('acTheme', null,
            array(
            'label'=> "Théme de l'activité"
            ))
            ->add('acDate', null,
            array(
            'label'=> "Date de l'activité"
            ))
            ->add('acPraticien', 'doctrine_orm_model_autocomplete',
            array(
            'label'=> 'Praticens convoqués ',
            ),null,
            array(
                'property'=>'praNom',
                'multiple'=> true,
                'placeholder'=> 'Nom des praticiens'
            ))
            ->add('acActReal.actReaVisiteur', 'doctrine_orm_model_autocomplete',
            array(
                'label'=> "Equipes de réalisation ",
            ),null,
            array(
                'property'=>'usrNom',
                'multiple'=> true,
                'placeholder'=> 'Nom des visiteurs :'
            ))
            ->add('acStates', null, array(
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
    public function validate(ErrorElement $errorElement,$object)
    {
        $errorElement
            ->with('acLieu')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('acDate')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('acTheme')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('acPraticien')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();

    }


}