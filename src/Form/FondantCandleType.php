<?php

namespace App\Form;

use App\Entity\FondantCandle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FondantCandleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {


        $descriptionMaxLength = 200;

        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'empty_data' => "",
                'attr' => [
                    // 'class' => "my-awesome-style",
                    'placeholder' => "Saisir le titre du livre"
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => "Le titre est obligatoire"
                    ])
                ]

            ])

            ->add('description', TextareaType::class,[
                'required' => false,

                

                'attr' => [
                    'style' => 'width: 300px',
                    // 'class' => "my-awesome-style",
                    'placeholder' => "Saisir la description du livre",
                    'maxLength' => $descriptionMaxLength
                ],
                'constraints' => [
                    new Length(
                        max: $descriptionMaxLength,
                        maxMessage: "La description est trop long... {{ limit }} max !"
                    )
                ]
            ])

            ->add('price', MoneyType::class, [
                
            ])
            ->add('quantity', NumberType::class, [

            ])
            ->add('image', FileType::class, [

                'mapped' => false,
                'required' => true,

                'attr' => [
                    // 'class' => "my-awesome-style",
                    'accept' => "image/*"
                ],

                'constraints' => [
                    new File([
                        'maxSize' => "1024k",
                        'maxSizeMessage' => "Le fichier est trop lourd. ({{ limit }} max)",
                        'mimeTypes' => [
                            "image/gif",
                            "image/jpeg",
                            "image/png",
                        ],
                        'mimeTypesMessage' => "Le format de fichier n'est pas autorisé"
                    ])
                ]

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FondantCandle::class,
        ]);
    }
}
