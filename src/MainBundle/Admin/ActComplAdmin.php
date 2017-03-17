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

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('acDATE');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('acDATE','date',array('label'=>'Date de l\'activité complémentaire :'));
    }
    public function preValidate($object){
        $actreas=$object->getAcACTREAS();
        foreach ($actreas as $actrea){
            $actrea->setActreaACTCOMPL($object);
        }
    }


}