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


class MedConstitutionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('constCOMPOSANT', 'sonata_type_model', array(
            'associated_property'=>'compLIBELLE',
            'class' => 'MainBundle\Entity\Composant',
            'property' => 'compLIBELLE',
            'label' => 'Composant constituant :'
        ));
        $formMapper->add('constQUANTITE', 'integer',array(
            'label'=>'Quantité :'
        ));

    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('constCOMPOSANT', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Composant',
            'property' => 'compLIBELLE',
            'label' => 'Composant constituant :'
        ));
        $showMapper->add('constQUANTITE', 'integer',array(
            'label'=>'Quantité :'
        ));

    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('constCOMPOSANT', 'sonata_type_model', array(
            'associated_property'=>'compLIBELLE',
            'class' => 'MainBundle\Entity\Composant',
            'property' => 'compLIBELLE',
            'label' => 'Composant constituant :'
        ));
        $listMapper->add('constQUANTITE', 'integer',array(
            'label'=>'Quantité :'
        ));

    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('constMEDICAMENT');
    }
}