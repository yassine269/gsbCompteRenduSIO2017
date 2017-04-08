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


class PresentationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->add('preLibelle', 'text',array(
            'label'=>'Libellé de la présentation :'
            ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {

        $showMapper
            ->add('preLibelle', 'text',array(
            'label'=>'Libellé de la présentation :'
            ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('preLibelle',null,array('label'=>'Libellé'));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('preLibelle',null,array('label'=>'Libellé'));


    }
    public function validate(ErrorElement $errorElement,$object)
    {
        $errorElement
            ->with('preLibelle')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();
    }



}