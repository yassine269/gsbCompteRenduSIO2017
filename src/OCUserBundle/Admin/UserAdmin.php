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
        $formMapper->add('praPRENOM', 'text');
        $formMapper->add('praNOM', 'text');
        $formMapper->add('praADRESSE', 'text');
        $formMapper->add('praCP', 'text');
        $formMapper->add('praVILLE', 'text');
        $formMapper->add('praCOEFNOTORIETE', 'integer');
        $formMapper->add('praTYPE', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypePraticien',
            'property'=>'typeLIBELLE',
            'required' => false,
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