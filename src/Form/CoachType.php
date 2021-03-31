<?php

namespace App\Form;

use App\Entity\Coach;
use App\Entity\User;
use libphonenumber\PhoneNumberType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CoachType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,[
                'attr'=>[
                    'placeholder' => 'Ngongang'
                ]
            ])
            ->add('prenom',TextType::class,[
                'attr'=>[
                    'placeholder' => 'loic'
                ]
            ])
            ->add('email',EmailType::class,[
                'attr'=>[
                    'placeholder' => 'nlfthebiebs@esprit.tn'
                ]
            ])
            ->add('username',TextType::class,[
                'attr'=>[
                    'placeholder' => 'nlfthebiebs'
                ],
                'empty_data'=>''
            ]);
            $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
                $coach = $event->getData();
                $form = $event->getForm();
                if (!$coach || null === $coach->getId()) {
                    $form->add('password',PasswordType::class,[
                        'empty_data'=>'',
                        'constraints'=>[
                            new NotBlank(['message'=>'Insérer un mot de passe'])
                        ]
                    ]);
                    $form->add('confirm_password',PasswordType::class);
                }
                else{
                    $form->add('password',PasswordType::class,[
                        'attr'=>[
                            'value'=>'12345678'
                        ]
                    ]);
                    $form->add('confirm_password',PasswordType::class,[
                        'attr'=>[
                            'value'=>'12345678'
                        ]
                    ]);
                };
            });
            $builder
            ->add('sexe',ChoiceType::class,[
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme'
                ]])
            ->add('specialite',ChoiceType::class,[
                'choices' => [
                    'Nutritioniste' => 'Nutritioniste',
                    'Psychothérapeute' => 'Psychothérapeute',
                    'Coach Sportif' => 'Coach Sportif'
                ],
                'constraints'=>[
                    new NotBlank(['message'=>'Choisisser une spécialité'])
                ]
                ])
            ->add('telephone',TextType::class,[
                    'attr'=>[
                        'placeholder' => '+216 XX XXX XXX'
                    ],
                'constraints'=>[
                    new NotBlank(['message'=>'Insérer un numéro de téléphone']),
                ]
                ])
           ->add('adresse',TextType::class,[
                'attr'=>[
                    'placeholder' => 'Ariana,zone industrielle'
                ],
                'constraints'=>[
                    new NotBlank(['message'=>'Insérer une adresse']),
                    new Length(['min'=>3,'minMessage'=>'L\'adresse doit avoir 3 caractères au minimum'])
                ]
            ]);

            $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
                $coach = $event->getData();
                $form = $event->getForm();
                if (!$coach || null === $coach->getId()) {
                    $form->add('imageFile', VichImageType::class, [
                        'label'=>'Photo de profil(JPG ou PNG)',
                        'required' => false,
                        'allow_delete' => true,
                        'delete_label' => 'supprimer',
                        'download_label' => 'télécharger',
                        'download_uri' => false,
                        'image_uri' => true,
                        'asset_helper' => true,
                        'constraints'=>[
                            new NotBlank(['message'=>'Insérer une image']),
                            new Image(['maxSize'=>"1M",
                                'maxSizeMessage'=>"Veuillez sélectionner une image de 1Mo maximum",
                                'mimeTypes'=>["image/jpeg","image/jpg","image/png"],
                                'mimeTypesMessage' => "Sélectionner une image valide"])
                        ]
                    ]);
                    $form->add('genericFile', VichFileType::class, [
                        'label'=>'Fichier Justificatif',
                        'required' => false,
                        'allow_delete' => true,
                        'delete_label' => 'supprimer',
                        'download_uri' => false,
                        'download_label' => 'télécharger',
                        'asset_helper' => true,
                        'constraints'=>[
                            new NotBlank(['message'=>'Insérer un justificatif']),
                            new File(['maxSize'=>"2048k",'mimeTypes'=>["application/pdf","application/x-pdf"],
                                'mimeTypesMessage'=> "Sélectionner un fichier pdf",
                            'maxSizeMessage'=>'Sélectionner un fichier de 2 Mo maximum'])
                        ]
                    ]);
                    $form->add('agreeTerms', CheckboxType::class, [
                        'mapped' => false,
                        'constraints' => [
                            new IsTrue([
                                'message' => 'Vous devez accepter nos conditions.',
                            ]),
                        ],
                    ]);
                }
                else{
                    $form->add('imageFile', VichImageType::class, [
                        'label'=>'Photo de profil(JPG ou PNG)',
                        'required' => false,
                        'allow_delete' => true,
                        'delete_label' => 'supprimer',
                        'download_label' => 'télécharger',
                        'download_uri' => false,
                        'image_uri' => true,
                        'asset_helper' => true,
                        'constraints'=>[
                            new Image(['maxSize'=>"1M",
                                'maxSizeMessage'=>"Veuillez sélectionner une image de 1Mo maximum",
                                'mimeTypes'=>["image/jpeg","image/jpg","image/png"],
                                'mimeTypesMessage' => "Sélectionner une image valide",
                                ])
                        ]
                    ]);
                }
            });


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
