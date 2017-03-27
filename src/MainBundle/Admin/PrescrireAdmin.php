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


class PrescrireAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper->add('presDOSAGE', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Dosage',
            'property' => 'dosCODE',
            'label' => 'Dosage :'
        ));
        $formMapper->add('presTYPEINDIV', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypeIndividu',
            'property' => 'typeIndLIBELLE',
            'label' => 'Type d\'individu concerné :'
        ));
        $formMapper->add('presPOSOLOGIE', 'text',array(
            'label'=>'Posologie associé :'
        ));

    }

    protected function configureShowFields(ShowMapper $showMapper)
    {

        $showMapper->add('presDOSAGE', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Dosage',
            'property' => 'dosCODE',
            'label' => 'Dosage :'
        ));
        $showMapper->add('presTYPEINDIV', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\TypeIndividu',
            'property' => 'typeIndLIBELLE',
            'label' => 'Type d\'individu concerné :'
        ));
        $showMapper->add('presPOSOLOGIE', 'text',array(
            'label'=>'Posologie associé :'
        ));

    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('presMED');
    }

    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper->add('presDOSAGE','many_to_one', array(
        'label' => 'Type du praticien :',
        'associated_property'=>'dosLIBELLE'
    ));
        $listMapper->add('presTYPEINDIV','many_to_one', array(
            'label' => 'Type d\'individu :',
            'associated_property'=>'typeIndLIBELLE'
        ));
        $listMapper->add('presPOSOLOGIE', 'text',array(
            'label'=>'Posologie associé :'
        ));

    }


}