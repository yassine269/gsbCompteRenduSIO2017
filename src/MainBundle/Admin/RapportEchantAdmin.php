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


class RapportEchantAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('rapEchantMEDICAMENT', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Medicament',
            'property' => 'medNOMCOMMERCIAL',
            'label' => 'Médicament :'
        ));
        $formMapper->add('rapEchantQUANTITE', 'integer',array(
            'label'=>'Quantité d\'échantillons offerts :'
        ));

    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('rapEchantMEDICAMENT', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Medicament',
            'property' => 'medNOMCOMMERCIAL',
            'label' => 'Médicament :'
        ));
        $showMapper->add('rapEchantQUANTITE', 'integer',array(
            'label'=>'Quantité d\'échantillons offerts :'
        ));

    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('rapEchantMEDICAMENT');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('rapEchantMEDICAMENT','many_to_one', array(
        'label' => 'Médicament :',
        'associated_property'=>'medNOMCOMMERCIAL'
    ));
        $listMapper->add('rapEchantQUANTITE', 'integer',array(
            'label'=>'Quantité d\'échantillons offerts :'
        ));

    }
    public function preValidate($object){
        $echants=$object->getRapECHANTILLONS();
        foreach ($echants as $echant) {
            $echant->setRapEchantMEDICAMENT($object);
        }
    }


}