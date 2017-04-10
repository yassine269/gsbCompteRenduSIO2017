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


class MedConstitutionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('constComposant', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Composant',
            'property' => 'compLibelle',
            'label' => 'Composant constituant :',
            'btn_add'=>false,
            'btn_delete'=>false,
            'btn_catalogue'=>true
            ))
            ->add('constQuantite', 'integer',array(
            'label'=>'Quantité :'
            ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('constComposant', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Composant',
            'property' => 'compLibelle',
            'label' => 'Composant constituant :'
            ))
            ->add('constQuantite', 'integer',array(
            'label'=>'Quantité :'
            ));


    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('constComposant', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Composant',
            'property' => 'compLibelle',
            'label' => 'Composant constituant :'
             ))
            ->add('constQuantite', 'integer',array(
            'label'=>'Quantité :'
             ))
            ->add('constMedicament', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Medicament',
            'property' => 'medNomCommercial',
            'label' => 'Médicament concerné :'
            ))
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' =>array(),
                        'delete'=>array()
                    )
                )
            );

    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('constComposant', 'doctrine_orm_model_autocomplete',
            array(
                'label'=> 'Composant constituant : ',
            ),null,
            array(
                'property'=>'compLibelle',
                'multiple'=> true,
                'placeholder'=> 'Libellé du composant'
            ))
                        ->add('constMedicament','doctrine_orm_model_autocomplete',
                            array(
                                'label'=>'Médicament concerné'
                            ),null,
                            array(
                                'property'=>'medNomCommercial',
                                'multiple'=>true,
                                'placeholder'=>'Nom commercial du médicament'
                            ));
    }
    public function validate(ErrorElement $errorElement,$object)
    {
        $errorElement
            ->with('constQuantite')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();

    }
    public function preValidate($object){

    }
}