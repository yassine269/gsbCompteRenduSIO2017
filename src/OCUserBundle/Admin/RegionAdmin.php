<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 21/02/2017
 * Time: 11:25
 */

namespace OCUserBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class RegionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('regLibelle', 'text');
        $formMapper->add('regSecteur', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Secteur',
            'property'=>'secLibelle',
            'required' => false,
        ));
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('regLibelle')
            ->add('regSecteur', 'doctrine_orm_model_autocomplete',
            array(
                'label'=> 'Secteur de la région',
            ),null,
            array(
                'property'=>'secLibelle',
                'multiple'=> false,
                'placeholder'=> 'Libellé du secteur'
            ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('regLibelle')
            ->add('regSecteur')
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array(),
                        'show' =>array()
                    )
                )
            );

    }
    public function validate(ErrorElement $errorElement, $object){
        $errorElement
            ->with('regLibelle')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();
    }




}