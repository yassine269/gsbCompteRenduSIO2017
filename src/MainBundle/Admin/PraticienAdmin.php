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


class PraticienAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('praPrenom', 'text',array(
            'label'=>'Prénom du praticien :'
        ));
        $formMapper->add('praNom', 'text',array(
            'label'=>'Nom du praticien :'
        ));
        $formMapper->add('praAdresse', 'text',array(
            'label'=>'Adresse du praticien :'
        ));
        $formMapper->add('praCp', 'text',array(
            'label'=>'Code postal du praticien :'
        ));
        $formMapper->add('praVille', 'text',array(
            'label'=>'Ville du praticien :'
        ));
        $formMapper->add('praCoefNotoriete', 'integer',array(
            'label'=>'Coefiscient de notoriété du praticien :'
        ));
        $formMapper->add('praType', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypePraticien',
            'property'=>'typeLibelle',
            'required' => false,
            'label' => 'Type du praticien :'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('praPrenom', 'text',array(
            'label'=>'Prénom du praticien :'
        ));
        $showMapper->add('praNom', 'text',array(
            'label'=>'Nom du praticien :'
        ));
        $showMapper->add('praAdresse', 'text',array(
            'label'=>'Adresse du praticien :'
        ));
        $showMapper->add('praCp', 'text',array(
            'label'=>'Code postal du praticien :'
        ));
        $showMapper->add('praVille', 'text',array(
            'label'=>'Ville du praticien :'
        ));
        $showMapper->add('praCoefNotoriete', 'integer',array(
            'label'=>'Coefiscient de notoriété du praticien :'
        ));
        $showMapper->add('praType', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypePraticien',
            'property'=>'typeLibelle',
            'required' => false,
            'label' => 'Type du praticien :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('praNom');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('praPrenom', 'text',array(
            'label'=>'Prénom du praticien :'
        ));
        $listMapper->add('praNom', 'text',array(
            'label'=>'Nom du praticien :'
        ));
        $listMapper->add('praAdresse', 'text',array(
            'label'=>'Adresse du praticien :'
        ));
        $listMapper->add('praCp', 'text',array(
            'label'=>'Code postal du praticien :'
        ));
        $listMapper->add('praVille', 'text',array(
            'label'=>'Ville du praticien :'
        ));
        $listMapper->add('praCoefNotoriete', 'integer',array(
            'label'=>'Coefiscient de notoriété du praticien :'
        ));
        $listMapper->add('praType','many_to_one', array(
            'label' => 'Type du praticien :',
            'associated_property'=>'typeLibelle'
        ));
    }
    public function preValidate($object)
    {
        $praNom=$object->getPraNOM();
        $praCP=substr($object->getPraCP(),0,2);
        $praCode='PRA'.$praCP.$praNom;
        $object->setPraCODE($praCode);
}



}