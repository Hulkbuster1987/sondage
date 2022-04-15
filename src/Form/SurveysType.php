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
        
        
        
        ->add('name', ChoiceType::class, [
            'label' => 'Question 1',
            'placeholder' => false,
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'choices'  => [
                'Chips' => 'reponse 1',
                'VA DANS TA CHAMBRE' => 'reponse 2',
                'ALED' => 'reponse 3'],
            ])
        

        ;
        
    }

    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Surveys::class,
            'required' => false,
        ]);
    }
}




