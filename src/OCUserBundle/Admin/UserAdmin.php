<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 21/02/2017
 * Time: 11:25
 */

namespace OCUserBundle\Admin;

use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use MainBundle\Form\MedConstitutionType;
use MainBundle\MainBundle;
use OCUserBundle\Entity\User;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Sonata\CoreBundle\Validator\ErrorElement;



class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Informations civil :', array('class' => 'col-md-6'))
                ->add('usrNom', 'text',array('label'=>'Nom :'))
                ->add('usrPrenom', 'text',array('label'=>'Prénom :'))
                ->add('usrAdresse', 'text',array('label'=>'Adresse :'))
                ->add('usrCp', 'text',array('label'=>'Code postal :'))
                ->add('usrVille', 'text',array('label'=>'Ville :'))
                ->add('email', 'email',array('label'=>'adresse e-mail :'))
            ->end();
        $formMapper
            ->with('Informations salarié :', array('class' => 'col-md-6'))
                ->add('usrDateEmbauche', 'date',array('label'=>'Date d\'embauche'))
                ->add('usrFonction', 'sonata_type_model', array(
                'class' => 'OCUserBundle\Entity\Fonction',
                'property'=>'fonctLibelle',
                'label'=>'Fonction :',
                'required' => false,
                'btn_add'=>false,
                'btn_delete'=>false,
                'btn_catalogue'=>true))
                ->add('usrDepartement', 'sonata_type_model', array(
                'class' => 'OCUserBundle\Entity\Departement',
                'property'=>'depLibelle',
                'required' => false,
                'label'=>'Departement :',
                'btn_add'=>false,
                'btn_delete'=>false,
                'btn_catalogue'=>true))
                ->add('usrRegion', 'sonata_type_model', array(
                'class' => 'OCUserBundle\Entity\Region',
                'property'=>'regLibelle',
                'label' => 'Région :',
                'required' => false,
                'btn_add'=>false,
                'btn_delete'=>false,
                'btn_catalogue'=>true))
                ->add('usrSecteur', 'sonata_type_model', array(
                'class' => 'OCUserBundle\Entity\Secteur',
                'property'=>'secLibelle',
                'required' => false,
                'label'=>'Secteur :',
                'btn_add'=>false,
                'btn_delete'=>false,
                'btn_catalogue'=>true))
                ->add('usrSupp', 'sonata_type_model', array(
                'class' => 'OCUserBundle\Entity\User',
                'property'=>'usrNom',
                'required' => false,
                'label'=>'Supérieur hiérarchique :',
                'btn_add'=>false,
                'btn_delete'=>false,
                'btn_catalogue'=>true))
        ->end();
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('usrMatricule',null,array('label'=>'Matricule utilisateur '))
            ->add('usrNom',null,array('label'=>'Nom '))
            ->add('usrPrenom',null,array('label'=>'Prénom '))
            ->add('usrCp',null,array('label'=>'Code postal '))
            ->add('usrVille',null,array('label'=>'Ville '))
            ->add('usrAdresse',null,array('label'=>'Adresse '))
            ->add('usrDateEmbauche',null,array('label'=>'Date d\'embauche
            '))
            ->add('email',null,array('label'=>'Email '))
            ->add('usrFonction', 'doctrine_orm_model_autocomplete',array(
                'associated_property'=>'fonctLibelle',
                'class' => 'OCUserBundle\Entity\Fonction',
                'property' => 'fonctLibelle',
                'label'=>'Fonction :'
            ),null,array('property'=>'fonctLibelle'))
            ->add('usrDepartement', 'doctrine_orm_model_autocomplete',array(
                'associated_property'=>'depLibelle',
                'class' => 'OCUserBundle\Entity\Departement',
                'property' => 'depLibelle',
                'label'=>'Libellé du département '
            ),null,array('property'=>'depLibelle'))
            ->add('usrRegion', 'doctrine_orm_model_autocomplete',array(
                'associated_property'=>'regLibelle',
                'class' => 'OCUserBundle\Entity\Region',
                'property' => 'regLibelle',
                'label'=>'Région '
            ),null,array('property'=>'secLibelle'))
            ->add('usrSecteur', 'doctrine_orm_model_autocomplete',array(
                'associated_property'=>'secLibelle',
                'class' => 'OCUserBundle\Entity\Secteur',
                'property' => 'secLibelle',
                'label'=>'libellé du secteur'
            ),null,array('property'=>'secLibelle'))
            ->add('usrSupp', 'doctrine_orm_model_autocomplete',array(
                'associated_property'=>'usrNom',
                'class' => 'OCUserBundle\Entity\User',
                'property' => 'usrNom',
                'label'=>'Supérieur hiérarchique'
            ),null,array('property'=>'usrNom'));
}
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('usrMatricule',null,array('label'=>'Matricule utilisateur'))
            ->add('usrNom',null,array('label'=>'Nom'))
            ->add('usrPrenom',null,array('label'=>'Prénom'))
            ->add('usrCp',null,array('label'=>'Code postal'))
            ->add('usrVille',null,array('label'=>'Ville'))
            ->add('usrAdresse',null,array('label'=>'Adresse'))
            ->add('usrDateEmbauche',null,array('label'=>'Date d\'embauche'))
            ->add('email',null,array('label'=>'Email'))
            ->add('usrFonction', 'sonata_type_model',array(
            'associated_property'=>'fonctLibelle',
            'class' => 'OCUserBundle\Entity\Fonction',
            'property' => 'fonctLibelle',
            'label'=>'Fonction'
            ))
            ->add('usrDepartement', 'sonata_type_model',array(
            'associated_property'=>'depLibelle',
            'class' => 'OCUserBundle\Entity\Departement',
            'property' => 'depLibelle',
            'label'=>'Libellé '
            ))
            ->add('usrRegion', 'sonata_type_model',array(
            'associated_property'=>'regLibelle',
            'class' => 'OCUserBundle\Entity\Region',
            'property' => 'regLibelle',
            'label'=>'Région'
            ))
            ->add('usrSecteur', 'sonata_type_model',array(
            'associated_property'=>'secLibelle',
            'class' => 'OCUserBundle\Entity\Secteur',
            'property' => 'secLibelle',
            'label'=>'libellé'
            ))
            ->add('usrSupp', 'sonata_type_model',array(
            'associated_property'=>'usrNom',
            'class' => 'OCUserBundle\Entity\User',
            'property' => 'usrNom',
            'label'=>'Supérieur hiérarchique'
            ))
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
            ->with('usrNom')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('usrPrenom')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('usrCp')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('usrVille')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('usrMatricule')
            ->end()
            ->with('usrAdresse')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('usrDateEmbauche')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('email')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('usrFonction')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('usrDepartement')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('usrRegion')
            ->assertNotNull()
            ->assertNotBlank()
            ->end()
            ->with('usrSecteur')
            ->assertNotNull()
            ->assertNotBlank()
            ->end();
    }
    public function preValidate($user){
        $userName=$user->getUsrNom().'.'.$user->getUsrNOM();
        $pwd=$userName;
        $matricule=mb_strimwidth($user->getUsrNom(),0,3);
        $user->setUsername($userName);
        $user->setPlainPassword($pwd);
        $user->setUsrMatricule($matricule);
        $user->setEnabled(true);
        $role = $user->getUsrFonction()->getFonctLibelle();
        if ($role == 'Responsable') {
            $user->addRole('ROLE_RESPONSABLE');
        }
        if ($role == 'delegue') {
            $user->addRole('ROLE_DELEGUE');
        }
        if ($role == 'Visiteur') {
            $user->addRole('ROLE_VISITEUR');
        }
        if ($role == 'Admin') {
            $user->addRole('ROLE_SUPER_ADMIN');
        }
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
            'csrf_token_id' => 'registration',
            // BC for SF < 2.8
            'intention' => 'registration',
1        ));
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }




}