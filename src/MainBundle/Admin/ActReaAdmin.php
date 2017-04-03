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


class ActReaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('actReaVisiteur', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\User',
            'property' => 'usrMatricule',
            'label'=>'Organisateurs :'
        ));
        $formMapper->add('actReaBudget', 'number',array(
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
        ));
        $listMapper->add('actReaBudget', 'number',array(
            'label'=>'Budget alloué a cette organisateur :'
        ));
        $listMapper->add('actReaActCompl', 'sonata_type_model',array(
            'associated_property'=>'id',
            'class' => 'MainBundle\Entity\ActCompl',
            'property' => 'id',
            'label'=>'Activité complémentaire concernée :'
        ));

    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('actReaVisiteur', 'sonata_type_model', array(
            'associated_property'=>'usrNom',
            'class' => 'OCUserBundle\Entity\User',
            'property' => 'usrNom',
            'label'=>'Organisateurs :'
        ));
        $showMapper->add('actReaBudget', 'number',array(
            'label'=>'Budget alloué a cette organisateur :'
        ));
        $showMapper->add('actReaActCompl', 'sonata_type_model',array(
            'associated_property'=>'id',
            'class' => 'OCUserBundle\Entity\ActCompl',
            'property' => 'id',
            'label'=>'Activité complémentaire concernée :'
        ));

    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('actReaVisiteur', 'doctrine_orm_model_autocomplete',
            array(
                'label'=> "Visiteur",
            ),null,
            array(
                'property'=>'usrNom',
                'multiple'=> true,
                'placeholder'=> 'Nom des visiteurs :'
            ));
        $datagridMapper->add('actReaBudget',null,array('label'=>'Budget alloué'));
    }



}