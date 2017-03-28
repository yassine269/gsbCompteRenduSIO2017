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


class DosageAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('dosQuantite', 'text',array(
            'label'=>'Quantité :'
        ));
        $formMapper->add('dosUnite', 'text',array(
            'label'=>'Unité de mesure :'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('dosQuantite', 'text',array(
            'label'=>'Quantité :'
        ));
        $showMapper->add('dosUnite', 'text',array(
            'label'=>'Unité de mesure :'
        ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('dosQuantite', 'text',array(
            'label'=>'Quantité :'
        ));
        $listMapper->add('dosUnite', 'text',array(
            'label'=>'Unité de mesure :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('dosCode');
    }

    public function preValidate($object){
        $dosQ=$object->getDosQUANTITE();
        $dosU=$object->getDosUNITE();
        $object->setDosCODE($dosQ.' '.$dosU);
    }


}