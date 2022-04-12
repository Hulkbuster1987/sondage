<?php

namespace App\Form;

use App\Entity\Surveys;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SurveyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', TextType::class, [
            'label' =>'Indiquez votre nom *',
            'help' =>'Ce champ doit contenir entre 5 et 100 caractères maximum'
])
            ->add('creationDate')
            ->add('creationUsername')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Surveys::class,
        ]);
    }
}
