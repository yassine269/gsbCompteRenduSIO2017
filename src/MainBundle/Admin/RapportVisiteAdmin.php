<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 21/02/2017
 * Time: 11:25
 */

namespace MainBundle\Admin;

use Doctrine\DBAL\Types\DateType;
use DoctrineExtensions\Query\Mysql\Date;
use MainBundle\Form\MedConstitutionType;
use MainBundle\MainBundle;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\Request;
use Sonata\CoreBundle\Validator\ErrorElement;

class RapportVisiteAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {


        $formMapper
            ->with('Informations générales :', array('class' => 'col-md-6'))
            ->add('rapDate', 'date', array(
                'label' => 'Date de la visite :'))
            ->add('rapPraticien', 'sonata_type_model', array(
                'class' => 'MainBundle\Entity\Praticien',
                'property' => 'praNom',
                'btn_add' => false,
                'btn_delete' => false,
                'btn_catalogue' => true,
                'label' => 'Praticien :'))
            ->add('rapMotif', 'sonata_type_model', array(
                'class' => 'MainBundle\Entity\Motif',
                'property' => 'motifLibelle',
                'btn_add' => false,
                'btn_delete' => false,
                'btn_catalogue' => true,
                'label' => 'motif de la visite :'))
            ->add('rapEchantillons', 'sonata_type_collection',
                array(
                    'by_reference' => false,
                    'required' => false,
                    'label' => 'Echantillons offerts :'
                ), array(
                    'edit' => 'inline',
                    'inline' => 'table',))
            ->end();

        $formMapper
            ->with('Bian de la visite :', array('class' => 'col-md-6'))
            ->add('rapBilan', 'textarea', array(
                'label' => 'Bilan de la visite :'))
            ->add('rapCoefImpact', 'integer', array(
                'label' => 'Coefiscient d\'impact de la visite :'))
            ->end();


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('rapVisiteur', 'doctrine_orm_model_autocomplete',
                array(
                    'label'=> 'Rédacteur',
                ),null,
                array(
                    'property'=>'usrNom',
                    'multiple'=> false,
                    'placeholder'=> 'Nom du rédacteur'
                ))
            ->add('rapDate','doctrine_orm_date', array(
                'label' => 'Date de la visite'
            ))
            ->add('rapPraticien', 'doctrine_orm_model_autocomplete',
            array(
                'label'=> 'Praticen',
            ),null,
            array(
                'property'=>'praNom',
                'multiple'=> false,
                'placeholder'=> 'Nom du praticien'
            ))
            ->add('rapMotif',  'doctrine_orm_model_autocomplete',
                array(
                    'label'=> 'Motif',
                ),null,
                array(
                    'property'=>'motifLibelle',
                    'multiple'=> false,
                    'placeholder'=> 'Libellé du motif'
                ))
            ->add('rapCoefImpact', null, array(
                'label' => 'Coeficien d\'impact'
            ));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('rapVisiteur', 'many_to_one', array(
                'label' => 'Rédacteur :',
                'associated_property' => 'usrNom',
                'action'=>array('show'=>array())
            ))
            ->add('rapDate', 'date', array(
                'pattern' => 'dd MMM y',
                'locale' => 'fr',
                'timezone' => 'Europe/Paris',
                'label' => 'Date de la visite :'
            ))
            ->add('rapCoefImpact', 'integer', array(
                'label' => 'Coeficien d\'impact de la visite :'
            ))
            ->add('rapBilan', 'textarea', array(
                'label' => 'Bilandu rapport :'

            ))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(
                        'template' => 'MainBundle:List:list_action_edit_rapport.html.twig',
                    ),
                    'show' =>array()
                )
            )
            );
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Informations générales :', array('class' => 'col-md-6'))
            ->add('rapDate', 'date', array(
                'pattern' => 'dd MMM y',
                'locale' => 'fr',
                'timezone' => 'Europe/Paris',
                'label' => 'Date de la visite :'
            ))
            ->add('rapVisiteur', 'sonata_type_model', array(
                'class' => 'OCUserBundle\Entity\User',
                'property' => 'usrNom',
                'label' => 'Visiteur :'))
            ->add('rapPraticien', 'sonata_type_model', array(
                'class' => 'MainBundle\Entity\Praticien',
                'property' => 'praNom',
                'label' => 'Praticien :'))
            ->add('rapMotif', 'sonata_type_model', array(
                'class' => 'MainBundle\Entity\Motif',
                'property' => 'motifLibelle',
                'associated_property' => 'motifLibelle',
                'label' => 'motif de la visite :'))
            ->add('rapEchantillons', 'sonata_type_collection',
                array(
                    'by_reference' => false,
                    'required' => false,
                    'label' => 'Echantillons offerts :'
                ), array(
                    'edit' => 'inline',
                    'inline' => 'table',))
            ->end();

        $showMapper
            ->with('Bian de la visite :', array('class' => 'col-md-6'))
            ->add('rapBilan', 'textarea', array(
                'label' => 'Bilan de la visite :'))
            ->add('rapCoefImpact', 'integer', array(
                'label' => 'Coefiscient d\'impact de la visite :'))
            ->end();
    }

    public function preValidate($object)
    {
        $visiteur = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser();
        $object->setRapVisiteur($visiteur);
        $rapEchants=$object->getRapEchantillons();
        foreach ($rapEchants as $rapEchant){
            $rapEchant->setRapEchantRapport($object);
        }
    }
    public function validate(ErrorElement $errorElement,$object)
    {
        $errorElement
            ->with('rapDate')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('rapCoefImpact')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('rapBilan')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();

    }
    public function createQuery($context = 'list')
    {
        $query = parent::createQuery($context);
        $visiteur = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser();
        if ($visiteur->getUsrFonction()->getFonctLibelle()=='Visiteur') {
            $query = parent::createQuery($context);
            $query->andWhere(
                $query->expr()->eq($query->getRootAliases()[0] . '.rapVisiteur', ':user')
            );
            $query->setParameter(':user', $visiteur);
        }

        if ($visiteur->getUsrFonction()->getFonctLibelle()=='Delegue') {
            $query = parent::createQuery($context);
            $query->join($query->getRootAliases()[0].'.rapVisiteur','r');
            $query->andWhere(
                $query->expr()->eq('r.usrRegion', ':region')
            );
            $query->setParameter(':region', $visiteur->getUsrRegion());
        }
        if ($visiteur->getUsrFonction()->getFonctLibelle()=='Responsable') {
            $query = parent::createQuery($context);
            $query->join($query->getRootAliases()[0].'.rapVisiteur','r');
            $query->andWhere(
                $query->expr()->eq('r.usrSecteur', ':secteur')
            );
            $query->setParameter(':secteur', $visiteur->getUsrSecteur());
        }


        return $query;

    }

}