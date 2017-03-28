<?php
namespace MainBundle\Form;

use MainBundle\Entity\MedConstitution;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedConstitutionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('constMedicament',EntityType::class, array(
            'class' => 'MainBundle\Entity\Medicament'))
                ->add('constComposant',EntityType::class, array(
            'class' => 'MainBundle\Entity\Composant'))
                ->add('medQUANTITE', IntegerType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => MedConstitution::class,
        ));
    }
}
?>