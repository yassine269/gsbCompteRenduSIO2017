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


class PraticienAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('praPRENOM', 'text',array(
            'label'=>'Prénom du praticien :'
        ));
        $formMapper->add('praNOM', 'text',array(
            'label'=>'Nom du praticien :'
        ));
        $formMapper->add('praADRESSE', 'text',array(
            'label'=>'Adresse du praticien :'
        ));
        $formMapper->add('praCP', 'text',array(
            'label'=>'Code postal du praticien :'
        ));
        $formMapper->add('praVILLE', 'text',array(
            'label'=>'Ville du praticien :'
        ));
        $formMapper->add('praCOEFNOTORIETE', 'integer',array(
            'label'=>'Coefiscient de notoriété du praticien :'
        ));
        $formMapper->add('praTYPE', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypePraticien',
            'property'=>'typeLIBELLE',
            'required' => false,
            'label' => 'Type du praticien :'
        ));
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('praNOM');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('praCODE');
        $listMapper->add('praNOM');

    }




}