<?php

namespace ApiBundle\Form;

use ApiBundle\ApiBundle;
use MainBundle\Entity\ActRea;
use MainBundle\Entity\Praticien;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Validator\Constraints\DateTime;


class ActComplType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('acLieu',TextType::class)
                ->add('acTheme',TextType::class)
                ->add('acPraticien',EntityType::class,array(
                    'class'=>Praticien::class,
                    'multiple'=>true
                ))
                ->add('acActReal',CollectionType::class,array(
                    'entry_type'=>ActReaType::class,
                    'allow_add'=>true
                ))
                ->add('acStates',TextType::class)
                ->add('acDate',DateType::class,array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd'
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\ActCompl',
            'allow_extra_fields'=>true,
            'csrf_protection' => false,

        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mainbundle_actcompl';
    }


}
