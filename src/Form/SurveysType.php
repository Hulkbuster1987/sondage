<?php

namespace App\Form;

use App\Entity\Surveys;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SurveysType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => "Titre Du Sondage",
                'help' => 'ce champs doit contenir entre 5 et 100 caracteres maximum'
            ])
            ->add('creationDate')
            ->add('UserName');
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Surveys::class,
            'required' => false,
        ]);
    }
}
