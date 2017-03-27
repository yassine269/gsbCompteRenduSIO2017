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


class PresentationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('preCODE', 'text',array(
            'label'=>'Code de la présentation :'
        ));
        $formMapper->add('preLIBELLE', 'text',array(
            'label'=>'Libellé de la présentation :'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('preCODE', 'text',array(
            'label'=>'Code de la présentation :'
        ));
        $showMapper->add('preLIBELLE', 'text',array(
            'label'=>'Libellé de la présentation :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('preLIBELLE');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('rapEchantMEDICAMENT', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Medicament',
            'property' => 'medNOMCOMMERCIAL',
            'label' => 'Médicament :'
        ));
        $listMapper->add('rapEchantQUANTITE', 'integer',array(
            'label'=>'Quantité d\'échantillons offerts :'
        ));

    }


}