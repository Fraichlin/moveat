<?php

namespace App\Form;

use App\Entity\Membre;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class MemberType extends AbstractType
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
                        'constraints'=>[
                            new NotBlank(['message'=>'Insérer un mot de passe'])
                        ],
                        'empty_data'=>''
                    ]);
                    $form->add('confirm_password',PasswordType::class);
                    $form->add('sexe',ChoiceType::class,[
                        'choices' => [
                            'Homme' => 'Homme',
                            'Femme' => 'Femme'
                        ]]);
                }
                else{
                    $form->add('password',PasswordType::class,[
                        'attr'=>[
                            'value'=>'12345678'
                        ]]);
                    $form->add('confirm_password',PasswordType::class, [
                        'attr'=>[
                            'value'=>'12345678'
                        ]
                    ]);
                };
            });

            $builder->add('poids',NumberType::class,[
                'attr'=>[
                    'placeholder' => 'en kilogrammes'
                ],
                'constraints'=>[
                    new NotBlank(['message'=>'Insérer votre poids']),
                    new LessThanOrEqual(['value'=>600,'message'=>'Le poids maximal est de 600 kg']),
                    new GreaterThan(['value'=>5,'message'=>'Le poids minimal est de 5 kg'])
                ]
            ])
            ->add('taille',NumberType::class,[
                'attr'=>[
                    'placeholder' => 'en mètres'
                ],
                'constraints'=>[
                    new NotBlank(['message'=>'Insérer votre taille']),
                    new LessThanOrEqual(['value'=>3,'message'=>'La taille maximale est de 3 m']),
                    new GreaterThan(['value'=>0.5,'message'=>'La taille minimale est de 0.5 m'])
                ]
            ]);
        $builder->add('imageFile', VichImageType::class, [
            'label'=>'Photo de profil(JPG ou PNG)',
            'required' => false,
            'allow_delete' => true,
            'delete_label' => 'supprimer',
            'download_label' => 'télécharger',
            'download_uri' => false,
            'image_uri' => true,
            'asset_helper' => true,
            'constraints'=>[
                new Image(['maxSize'=>"4M",
                    'maxSizeMessage'=>"Veuillez sélectionner une image de 4Mo maximum",
                    'mimeTypes'=>["image/jpeg","image/jpg","image/png"],
                    'mimeTypesMessage' => "Sélectionner une image valide"])
            ]
        ]);
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $coach = $event->getData();
            $form = $event->getForm();
            if (!$coach || null === $coach->getId()) {
                $form->add('agreeTerms', CheckboxType::class, [
                    'mapped' => false,
                    'constraints' => [
                        new IsTrue([
                            'message' => 'Vous devez accepter nos conditions.',
                        ]),
                    ],
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
