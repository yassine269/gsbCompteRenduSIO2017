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


class PresentationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('preCode', 'text',array(
            'label'=>'Code de la présentation :'
        ));
        $formMapper->add('preLibelle', 'text',array(
            'label'=>'Libellé de la présentation :'
        ));
    }
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('preCode', 'text',array(
            'label'=>'Code de la présentation :'
        ));
        $showMapper->add('preLibelle', 'text',array(
            'label'=>'Libellé de la présentation :'
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('preLibelle');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('rapEchantMedicament', 'sonata_type_model', array(
            'class' => 'MainBundle\Entity\Medicament',
            'property' => 'medNomCommercial',
            'label' => 'Médicament :'
        ));
        $listMapper->add('rapEchantQuantite', 'integer',array(
            'label'=>'Quantité d\'échantillons offerts :'
        ));

    }


}