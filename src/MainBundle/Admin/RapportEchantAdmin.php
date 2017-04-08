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
use Sonata\CoreBundle\Validator\ErrorElement;


class RapportEchantAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('rapEchantMedicament', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Medicament',
            'property' => 'medNomCommercial',
            'label' => 'Médicament :'
            ))
            ->add('rapEchantQuantite', 'integer',array(
            'label'=>'Quantité d\'échantillons offerts :'
            ));

    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('rapEchantMedicament', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Medicament',
            'property' => 'medNomCommercial',
            'label' => 'Médicament :'
            ))
            ->add('rapEchantQuantite', 'integer',array(
            'label'=>'Quantité d\'échantillons offerts :'
            ));

    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('rapEchantMedicament');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('rapEchantMedicament','many_to_one', array(
            'label' => 'Médicament :',
            'associated_property'=>'medNomCommercial'
            ))
            ->add('rapEchantQuantite', 'integer',array(
            'label'=>'Quantité d\'échantillons offerts :'
            ))
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' =>array()
                    )
                )
            );

    }
    public function validate(ErrorElement $errorElement,$object)
    {
        $errorElement
            ->with('rapEchantQuantite')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();
    }
    public function preValidate($object){
        $echants=$object->getRapECHANTILLONS();
        foreach ($echants as $echant) {
            $echant->setRapEchantMEDICAMENT($object);
        }
    }


}