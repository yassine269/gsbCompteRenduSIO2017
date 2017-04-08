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
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Sonata\CoreBundle\Validator\ErrorElement;



class DepartementAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('depLibelle', 'text', array(
            'label'=>'Libéllé du départment'
            ))
            ->add('depRegion', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Region',
            'property'=>'regLibelle',
            'required' => false,
            ));
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('depLibelle')

            ->add('depRegion', 'doctrine_orm_model_autocomplete',
                array(
                    'label'=> 'Région du département',
                ),null,
                array(
                    'property'=>'regLibelle',
                    'multiple'=> false,
                    'placeholder'=> 'libellé de la région'
                ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('depLibelle')
            ->addIdentifier('depRegion')
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array(),
                        'show' =>array()
                    )
                )
            );

    }
    public function validate(ErrorElement $errorElement,$object)
    {
        $errorElement
            ->with('depLibelle')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('depRegion')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();
    }





}