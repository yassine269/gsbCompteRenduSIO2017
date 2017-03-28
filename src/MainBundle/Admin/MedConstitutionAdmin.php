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
        $formMapper->add('constComposant', 'sonata_type_model', array(
            'associated_property'=>'compLibelle',
            'class' => 'MainBundle\Entity\Composant',
            'property' => 'compLibelle',
            'label' => 'Composant constituant :'
        ));
        $formMapper->add('constQuantite', 'integer',array(
            'label'=>'Quantité :'
        ));

    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('constComposant', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Composant',
            'property' => 'compLibelle',
            'label' => 'Composant constituant :'
        ));
        $showMapper->add('constQuantite', 'integer',array(
            'label'=>'Quantité :'
        ));

    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('constComposant', 'sonata_type_model', array(
            'associated_property'=>'compLibelle',
            'class' => 'MainBundle\Entity\Composant',
            'property' => 'compLibelle',
            'label' => 'Composant constituant :'
        ));
        $listMapper->add('constQuantite', 'integer',array(
            'label'=>'Quantité :'
        ));

    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('constMedicament');
    }
}