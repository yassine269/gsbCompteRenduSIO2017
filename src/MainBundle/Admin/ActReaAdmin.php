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


class ActReaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('actReaVisiteur', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\User',
            'property' => 'usrMatricule',
            'label'=>'Organisateurs :',
            'btn_add'=>false,
            'btn_delete'=>false,
            'btn_catalogue'=>true,
        ))
            ->add('actReaBudget', 'number',array(
            'label'=>'Budget alloué a cette organisateur :'
        ));

    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('actReaVisiteur', 'sonata_type_model', array(
            'associated_property'=>'usrNom',
            'class' => 'OCUserBundle\Entity\User',
            'property' => 'usrNom',
            'label'=>'Organisateurs :'
             ))
             ->add('actReaBudget', 'number',array(
            'label'=>'Budget alloué a cette organisateur :'
             ))
             ->add('actReaActCompl', 'sonata_type_model',array(
            'associated_property'=>'id',
            'class' => 'MainBundle\Entity\ActCompl',
            'property' => 'id',
            'label'=>'Activité complémentaire concernée :'
             ))
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' =>array()
                    )
                )
            );

    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('actReaVisiteur', 'sonata_type_model', array(
            'associated_property'=>'usrNom',
            'class' => 'OCUserBundle\Entity\User',
            'property' => 'usrNom',
            'label'=>'Organisateurs :'
            ))
            ->add('actReaBudget', 'number',array(
            'label'=>'Budget alloué a cette organisateur :'
            ))
            ->add('actReaActCompl', 'sonata_type_model',array(
            'associated_property'=>'id',
            'class' => 'OCUserBundle\Entity\ActCompl',
            'property' => 'id',
            'label'=>'Activité complémentaire concernée :'
            ));

    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('actReaVisiteur', 'doctrine_orm_model_autocomplete',
            array(
                'label'=> "Visiteur",
            ),null,
            array(
                'property'=>'usrNom',
                'multiple'=> true,
                'placeholder'=> 'Nom des visiteurs :'
            ))
            ->add('actReaBudget',null,array('label'=>'Budget alloué'));
    }
    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('actReaVisiteur')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('actReaBudget')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
        ;
    }



}