<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 21/02/2017
 * Time: 11:25
 */

namespace OCUserBundle\Admin;

use MainBundle\Form\MedConstitutionType;
use MainBundle\MainBundle;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('usrMATRICULE', 'text');
        $formMapper->add('usrNOM', 'text');
        $formMapper->add('usrPRENOM', 'text');
        $formMapper->add('usrADRESSE', 'text');
        $formMapper->add('usrCP', 'text');
        $formMapper->add('usrVILLE', 'integer');
        $formMapper->add('usrDATEEMBAUCHE', 'integer');
        $formMapper->add('usrFONCTION', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Fonction',
            'property'=>'LIBELLE',
            'required' => false,
        ));
        $formMapper->add('usrDEPARTEMENT', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Departement',
            'property'=>'depLIBELLE',
            'required' => false,
        ));
        $formMapper->add('usrREGION', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Region',
            'property'=>'regLIBELLE',
            'required' => false,
        ));
        $formMapper->add('usrSECTEUR', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Secteur',
            'property'=>'secLIBELLE',
            'required' => false,
        ));
        $formMapper->add('usrSUPP', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\User',
            'property'=>'usrNOM',
            'required' => false,
        ));
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('usrNOM');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('usrMATRICULE');
        $listMapper->add('usrNOM');

    }




}