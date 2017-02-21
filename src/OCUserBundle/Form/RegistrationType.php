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
            ->add('usrNOM',TextType::class,array(
                'label'=> "Nom :"
            ))
            ->add('usrPRENOM',TextType::class,array(
                'label'=> 'Prénom :'
            ))
            ->add('usrADRESSE',TextType::class,array(
                'label'=> 'Adresse :'
            ))
            ->add('usrCP',TextType::class,array(
                'label'=> 'Code postal :'
            ))
            ->add('usrVILLE',TextType::class,array(
                'label'=> 'Ville :'
            ))
            ->add('usrDATEEMBAUCHE',DateType::class,array(
                'label'=> 'Date d\'embauche :'
            ))
            ->add('usrDEPARTEMENT',EntityType::class,array(
                'label'=> 'Département de rattachement du visiteur :',
                'class'=>'OCUserBundle:Departement',
                'choice_value'=>'depLIBELLE'
            ))
            ->add('usrREGION',EntityType::class,array(
                'label'=> 'Région de rattachement du délégué régional :',
                'class'=>'OCUserBundle:Region',
                'choice_value'=>'regLIBELLE'
            ))
            ->add('usrSECTEUR',EntityType::class,array(
                'label'=> 'Secteur de rattachement du responsable de secteur :',
                'class'=>'OCUserBundle:Secteur',
                'choice_value'=>'secLIBELLE'
            ))
            ->add('usrSUPP',EntityType::class,array(
                'label'=> 'Supérieur hiérarchique :',
                'class'=>'OCUserBundle:User',
                'choice_value'=>'usrNOM'
            ))
            ->add('email',EmailType::class,array(
                'label'=> 'Adresse e-mail :'
            ))
            ->add('usrFONCTION',EntityType::class,array(
                'label'=> 'Fonction du collaborateur :',
                'class'=>'OCUserBundle:Fonction',
                'choice_value'=>'LIBELLE'
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