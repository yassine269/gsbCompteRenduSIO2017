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


class TypePraticienAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('typeLibelle', 'text',array(
            'label'=>'Libéllé du type de praticien :'
            ))
            ->add('typeLieu', 'text',array(
            'label'=>'Lieu d\'exercice du praticien :'
            ));
    }

    protected function showFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('typeLibelle', 'text',array(
            'label'=>'Libéllé du type de praticien :'
            ))
            ->add('typeLieu', 'text',array(
            'label'=>'Lieu d\'exercice du praticien :'
            ));

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('typeLibelle',null,array('label'=>'Libellé'));
        $datagridMapper->add('typeLieu',null,array('label'=>'Lieu d\'éxercice'));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('typeLibelle',null,array(
                'label'=>'Libéllé du type :'))
            ->add('typeLieu',null,array(
                'label'=>'Lieu d\'exercice :'))
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
            ->with('typeLibelle')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('TypeLieu')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();

    }

}