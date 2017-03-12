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


class MedConstitutionAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('constCOMPOSANT', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Composant',
            'property' => 'compLIBELLE',
        ));
        $formMapper->add('constQUANTITE', 'integer');

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('constMEDICAMENT');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('constMEDICAMENT');
    }


}