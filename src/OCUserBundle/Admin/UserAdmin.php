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


class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('usrMatricule', 'text');
        $formMapper->add('usrNom', 'text');
        $formMapper->add('usrPrenom', 'text');
        $formMapper->add('usrAdresse', 'text');
        $formMapper->add('usrCp', 'text');
        $formMapper->add('usrVille', 'text');
        $formMapper->add('usrDateEmbauche', 'date');
        $formMapper->add('email', 'email');
        $formMapper->add('usrFonction', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Fonction',
            'property'=>'fonctLibelle',
            'required' => false,
        ));
        $formMapper->add('usrDepartement', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Departement',
            'property'=>'depLibelle',
            'required' => false,
        ));
        $formMapper->add('usrRegion', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Region',
            'property'=>'regLibelle',
            'required' => false,
        ));
        $formMapper->add('usrSecteur', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\Secteur',
            'property'=>'secLibelle',
            'required' => false,
        ));
        $formMapper->add('usrSupp', 'sonata_type_model', array(
            'class' => 'OCUserBundle\Entity\User',
            'property'=>'usrNom',
            'required' => false,
        ));
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
        if ($role == 'Delegue') {
            $user->addRole('ROLE_DELEGUE');
        }
        if ($role == 'Visiteur') {
            $user->addRole('ROLE_VISITEUR');
        }
        if ($role == 'Admin') {
            $user->addRole('ROLE_SUPER_ADMIN');
        }
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('usrNom');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('usrMatricule');
        $listMapper->add('usrNom');

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
            'csrf_token_id' => 'registration',
            // BC for SF < 2.8
            'intention' => 'registration',
        ));
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }




}