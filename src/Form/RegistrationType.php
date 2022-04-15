<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Username', TextType::class,[
                'label' => 'Indiquez un nom d\'utilisateur pour votre compte *',
            ])
            ->add('email', EmailType::class,[
                'label' => 'Ici, mettre votre mail vous devez',
            ])

            ->add('plainPassword', RepeatedType::class, [
                 
                'type' => PasswordType::class,
                'mapped' => false,
                'invalid_message' => 'Les mots de passe doivent être identiques !',
                'options' => ['attr' => ['class' => 'password-field']],
                'first_options'  => ['label' => 'Renseignez un mot de passe *', 
                                     'help' => '8 caractères minimum: 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial',],
                'second_options' => ['label' => 'Confirmez votre mot de passe *',
                                     'help' => 'Répétez ici votre mot de passe',],
                'constraints' => [
                    new NotBlank([
                        'message' => 'le mot de passe est obligatoire',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Le mot de passe doit comporter au moins {{ limit }} caractères',
                        'max' => 2000,
                    ]),
                    new Regex([
                        'pattern' => '/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[ !\"\#\$%&\'\(\)*+,\-.\/:;<=>?@[\\^\]_`\{|\}~])^.{8,4096}$/',
                        'message' => 'Le mot de passe doit obligatoirement comporter les éléments suivant : 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial',
                    ],)                    
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
