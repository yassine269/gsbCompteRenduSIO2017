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


class FamilleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('famLibelle', 'text',array(
            'label'=>'Libellé de la famille'
        ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper->add('famLibelle', 'text',array(
            'label'=>'Libellé de la famille'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {

        $showMapper->add('famLibelle', 'text',array(
            'label'=>'Libellé de la famille'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('famLibelle',null,array('label'=>'Libellé de la famille'));
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('famLibelle')
                ->assertLength(array('min' => 4,'max'=> 20))
                ->assertNotNull()
                ->assertNotBlank()
            ->end()
        ;
    }



}