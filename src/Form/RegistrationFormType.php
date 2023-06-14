<?php

namespace App\Form;

use DateTime;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\LessThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       
        // Récupération de l'option "country"
        $country = $options['country'];

        $builder

            // Email + Confirmation
            ->add('email', RepeatedType::class, [
                // FormType du champ à répéter
                'type' => EmailType::class,

                
                // Definir le premier champ comme Obligatoire
                'required' => true,

                // Label global
                 'label' => "Your Email",

                // Options appliquées sur les deux champ
                // 'options' => ['attr' => ['class' => 'password-field']],
                
                // Options du premier champ
                'first_options' => [
                    'label' => 'Email',
                    
                    'attr' => [
                        'placeholder' => 'Email',
                        'style' => 'width: 300px',
                        'class' => 'form-control'
                    ],
                    'constraints' => [
                        new Email(['message' => "email invalide"]),
                    ]
                ],
                    

                
                // Option du champ de répétition
                'second_options' => [
                    'label' => 'Email confirmation',
                   
                    'attr' => [
                        'placeholder' => 'Email de confirmation',
                        'style' => 'width: 300px',
                        'class' => 'form-control'
                    ]
                ],
                
                // Contraintes
                'invalid_message' => 'Les champs e-mail doivent correspondre.',
            ])

            // Password + Confirmation
            ->add('plainPassword', RepeatedType::class, [
                 // Label global
                'type' => PasswordType::class,
                'mapped' => false,
                'required' => true,
                'label' => "mots de passe",

                'first_options'  => [
                    'label' => 'mots de passe',
                    
                    'attr' => [
                        'placeholder' => 'Mot de passe',
                        'style' => 'width: 300px',
                        'class' => 'form-control'
                    ],

                    'constraints' => [
                        new NotBlank([
                            'message' => 'entrer un mot de passe',
                        ]),
                        new Length([
                            'min' => 6,
                            'minMessage' => 'votre mot de passe doit contenir au moins {{ limit }} caractères',
                            // max length allowed by Symfony for security reasons
                            'max' => 4096,
                        ]),
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirmation de mot de passe',
                    
                    'attr' => [
                        'placeholder' => 'confirmation mots de passe',
                        'style' => 'width: 300px',
                        'class' => 'form-control'
                    ],
                ],

                // Contraintes
                'invalid_message' => 'Les champs mots de passe doivent correspondre.',
            ])

            // Firstname
            ->add('firstname', TextType::class, [
                'label' => "Nom",
                'required' => true,
                'attr' => [
                    'placeholder' => "Nom",
                    'style' => 'width: 300px',
                    'class' => 'form-control'
                ],
                'constraints' => [],
            ])

            // Lastname
            ->add('lastname', TextType::class, [
                'label' => "Prénom",
                'required' => true,
                'attr' => [
                    'placeholder' => "Prénom",
                    'style' => 'width: 300px',
                    'class' => 'form-control'
                ],
                'constraints' => [],
            ])

            //phone
            ->add('phone', TextType::class, [
                'label' => "Numéro de téléphone",
                'required' => true,
                'attr' => [
                    'placeholder' => "telephone",
                    'style' => 'width: 300px',
                    'class' => 'form-control'
                ],
                'constraints' => [],
            ])
            

           // street
           ->add('street', TextType::class, [
            'label' => "rue",
            'required' => true,
            'attr' => [
                'placeholder' => "nom de la  rue",
                'style' => 'width: 300px',
                'class' => 'form-control'
            ],
            'constraints' => [],
        ])
        ->add('streetNumber', TextType::class, [
            'label' => "Numero de la rue",
            'required' => true,
            'attr' => [
                'placeholder' => "Numero de la rue",
                'style' => 'width: 300px',
                'class' => 'form-control'
            ],
            'constraints' => [],
        ])
        ->add('city', TextType::class, [
            'label' => "Ville",
            'required' => true,
            'attr' => [
                'placeholder' => "Votre ville",
                'style' => 'width: 300px',
                'class' => 'form-control'
            ],
            'constraints' => [],
        ])

            // zip
              ->add('zip', TextType::class, [
                'label' => "Code postal",
                'required' => true,
                'attr' => [
                    'placeholder' => "code postal",
                    'style' => 'width: 300px',
                    'class' => 'form-control'
                ],
                'constraints' => [],
            ])
            

            // Country
            ->add('country', CountryType::class, [
                'label' => "pays",
                'required' => true,
                // 'attr' => [
                //     'placeholder' => "Your country"
                // ],
                'placeholder' => "selectionner votre pays",
                'data' => $country,
                'constraints' => [],
                'attr' => [
                    'style' => 'width: 300px',
                    'class' => 'form-control'
                ],
            ])
        ;

        if ($options['show_agreeterms'])
        {
            $builder->add('agreeTerms', CheckboxType::class, [
                'label' => "Accetez les <a href=\"#\">terms</a>",
                'label_html' => true,
    
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'accepter les termes',
                    ]),
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'country' => null, // Definition de l'option "country"
            'genders' => [],
            'show_agreeterms' => true,
        ]);
    }
}