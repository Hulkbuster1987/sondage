<?php

namespace App\Form;

use App\Entity\Surveys;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class SurveysType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('questions', TextareaType::class, [
            'attr' => ['rows' => 8, 'maxlength' => 2000],
            'label' => 'Vous avez une question ? ',
            'help' => 'entre 10 et 2000 caractères maximum',
            'constraints' => [
                new NotBlank(['message' => 'Ce champ doit contenir votre question']),
                new Length([
                    'min' => 10,
                    'minMessage' => 'Le message doit contenir au moins {{ limit }} caractères',
                    'max' => 2000,
                    'maxMessage' => 'Le message doit contenir au maximum {{ limit }} caractères'
                ]),
            ],
        ])
        
        
        ->add('answers', ChoiceType::class, [
            'label' => '',
            'placeholder' => false,
            'required' => true,
            'multiple' => false,
            'expanded' => true,
            'choices'  => [
                'oui' => 'reponse 1',
                'Non' => 'reponse 2',
                'pas interesse' => 'reponse 3']
            ])
        

        ->add('save' , SubmitType::class);
        
    }

    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Surveys::class,
            'required' => false,
        ]);
    }
}




