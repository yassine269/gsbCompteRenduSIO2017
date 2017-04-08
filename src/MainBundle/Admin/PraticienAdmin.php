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
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class PraticienAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('praPrenom', 'text',array(
            'label'=>'Prénom du praticien :'
            ))
            ->add('praNom', 'text',array(
            'label'=>'Nom du praticien :'
            ))
            ->add('praAdresse', 'text',array(
            'label'=>'Adresse du praticien :'
            ))
            ->add('praCp', 'text',array(
            'label'=>'Code postal du praticien :'
            ))
            ->add('praVille', 'text',array(
            'label'=>'Ville du praticien :'
            ))
            ->add('praCoefNotoriete', 'integer',array(
            'label'=>'Coefiscient de notoriété du praticien :'
            ))
            ->add('praType', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypePraticien',
            'property'=>'typeLibelle',
            'required' => false,
            'label' => 'Type du praticien :',
            'btn_add'=>false,
            'btn_delete'=>false,
            'btn_catalogue'=>true
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('praPrenom', 'text',array(
            'label'=>'Prénom du praticien :'
            ))
            ->add('praNom', 'text',array(
            'label'=>'Nom du praticien :'
            ))
            ->add('praAdresse', 'text',array(
            'label'=>'Adresse du praticien :'
            ))
            ->add('praCp', 'text',array(
            'label'=>'Code postal du praticien :'
            ))
            ->add('praVille', 'text',array(
            'label'=>'Ville du praticien :'
            ))
            ->add('praCoefNotoriete', 'integer',array(
            'label'=>'Coefiscient de notoriété du praticien :'
            ))
            ->add('praType', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypePraticien',
            'property'=>'typeLibelle',
            'required' => false,
            'label' => 'Type du praticien :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('praNom',null,array('label'=>'Nom'))
            ->add('praPrenom',null,array('label'=>'Prénom'))
            ->add('praCp',null,array('label'=>'Code postal'))
            ->add('praVille',null,array('label'=>'Ville'))
            ->add('praCoefNotoriete',null,array('label'=>'Coef. Notoriété'))
            ->add('praAdresse',null,array('label'=>'Adresse'))
            ->add('praType','doctrine_orm_model_autocomplete',
            array(
                'label'=> "Type",
            ),null,
            array(
                'property'=>'typeLibelle',
                'multiple'=> false,
                'placeholder'=> "Libellé du type"
            ));

    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('praPrenom', 'text',array(
            'label'=>'Prénom du praticien :'
            ))
            ->add('praNom', 'text',array(
            'label'=>'Nom du praticien :'
            ))
            ->add('praAdresse', 'text',array(
            'label'=>'Adresse du praticien :'
            ))
            ->add('praCp', 'text',array(
            'label'=>'Code postal du praticien :'
            ))
            ->add('praVille', 'text',array(
            'label'=>'Ville du praticien :'
            ))
            ->add('praCoefNotoriete', 'integer',array(
            'label'=>'Coefiscient de notoriété du praticien :'
            ))
            ->add('praType','many_to_one', array(
            'label' => 'Type du praticien :',
            'associated_property'=>'typeLibelle'
            ))
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' =>array()
                    )
                )
            );
    }

    public function preValidate($object)
    {
        $praNom=$object->getPraNOM();
        $praCP=substr($object->getPraCP(),0,2);
        $praCode='PRA'.$praCP.$praNom;
        $object->setPraCODE($praCode);
    }
    public function validate(ErrorElement $errorElement,$object){
        $errorElement
            ->with('praNom')
            ->assertLength(array('min' => 0,'max'=> 30))
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('praPrenom')
            ->assertLength(array('min' => 0,'max'=> 30))
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('praCp')
            ->assertLength(array('min' => 0,'max'=> 10))
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('praVille')
            ->assertLength(array('min' => 0,'max'=> 30))
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('praAdresse')
            ->assertLength(array('min' => 0,'max'=> 80))
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('praCoefNotoriete')
            ->assertLength(array('min' => 0,'max'=> 2))
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('praType')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
        ;
    }



}