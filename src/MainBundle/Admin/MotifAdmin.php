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


class MotifAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('motifLibelle', 'text',array(
            'label'=>'Libéllé du motif :'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('motifLibelle', 'text',array(
            'label'=>'Libéllé du motif :'
        ));
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('motifLibelle', 'text',array(
            'label'=>'Libéllé du motif :'
        ));
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('motifLibelle');
    }



}