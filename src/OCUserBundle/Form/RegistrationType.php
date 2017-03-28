<?php

namespace OCUserBundle\Form;

use OCUserBundle\Entity\Departement;
use OCUserBundle\Entity\Fonction;
use OCUserBundle\Entity\Region;
use OCUserBundle\Entity\Secteur;
use OCUserBundle\Entity\User;
use OCUserBundle\OCUserBundle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usrNom',TextType::class,array(
                'label'=> "Nom :"
            ))
            ->add('usrPrenom',TextType::class,array(
                'label'=> 'Prénom :'
            ))
            ->add('usrAdresse',TextType::class,array(
                'label'=> 'Adresse :'
            ))
            ->add('usrCp',TextType::class,array(
                'label'=> 'Code postal :'
            ))
            ->add('usrVille',TextType::class,array(
                'label'=> 'Ville :'
            ))
            ->add('usrDateEmbauche',DateType::class,array(
                'label'=> 'Date d\'embauche :'
            ))
            ->add('usrDepartement',EntityType::class,array(
                'label'=> 'Département de rattachement du visiteur :',
                'class'=>'OCUserBundle:Departement',
                'choice_value'=>'depLibelle'
            ))
            ->add('usrRegion',EntityType::class,array(
                'label'=> 'Région de rattachement du délégué régional :',
                'class'=>'OCUserBundle:Region',
                'choice_value'=>'regLibelle'
            ))
            ->add('usrSecteur',EntityType::class,array(
                'label'=> 'Secteur de rattachement du responsable de secteur :',
                'class'=>'OCUserBundle:Secteur',
                'choice_value'=>'secLibelle'
            ))
            ->add('usrSupp',EntityType::class,array(
                'label'=> 'Supérieur hiérarchique :',
                'class'=>'OCUserBundle:User',
                'choice_value'=>'usrNom'
            ))
            ->add('email',EmailType::class,array(
                'label'=> 'Adresse e-mail :'
            ))
            ->add('usrFonction',EntityType::class,array(
                'label'=> 'Fonction du collaborateur :',
                'class'=>'OCUserBundle:Fonction',
                'choice_value'=>'fonctLibelle'
            ))
            ->add('Sumbit',SubmitType::class);

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