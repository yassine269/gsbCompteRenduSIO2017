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


class TypeIndividuAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('TypeIndLibelle', 'text',array(
            'label'=>'Libéllé du type d\'individu :'
        ));
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('TypeIndLibelle', 'text',array(
            'label'=>'Libéllé du type d\'individu :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('TypeIndLibelle');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('TypeIndLibelle',null,array(
            'label'=>'Libéllé du type d\'individu :'
        ));
    }


}