<?php

namespace ApiBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class RapportVisiteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                $builder->add('rapDate',DateType::class,array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd'
                ))
                ->add('rapSaisieDate',TextType::class)
                ->add('rapBilan',TextareaType::class)
                ->add('rapCoefImpact')
                ->add('rapVisiteur',EntityType::class,array(
                    'class'=>'OCUserBundle:User'
                ))
                ->add('rapPraticien',EntityType::class,array(
                    'class'=>"MainBundle:Praticien"
                ))
                ->add('rapEchantillons',CollectionType::class,array(
                    'entry_type'=>RapportEchantType::class,
                    'allow_add'=>true
                ))
                ->add('rapMotif',EntityType::class,array(
                    'class'=>'MainBundle:Motif'
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\RapportVisite',
            'allow_extra_fields'=>true,
            'csrf_protection' => false,

        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mainbundle_rapportvisite';
    }


}
