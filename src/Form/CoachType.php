<?php

namespace App\Form;

use App\Entity\Coach;
use libphonenumber\PhoneNumberType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoachType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,[
                'attr'=>[
                    'placeholder' => 'Ngongang',
                ]
            ])
            ->add('prenom',TextType::class,[
                'attr'=>[
                    'placeholder' => 'Loic',
                ]
            ])
            ->add('login',TextType::class,[
                'attr'=>[
                    'placeholder' => 'user1234',
                ]
            ])
            ->add('password',PasswordType::class)
            ->add('confirm_password',PasswordType::class)
            ->add('email',EmailType::class,[
                'attr'=>[
                    'placeholder' => 'nlfthebiebs@esprit.tn'
                ]
            ])
            ->add('sexe',ChoiceType::class,[
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme'
                ]
            ])
            ->add('telephone',TextType::class,[
                'attr'=>[
                    'placeholder' => '+216 XX XXX XXX'
                ]
            ])
            ->add('photo',FileType::class, array('data_class' => null))
            ->add('adresse',TextType::class,[
                'attr'=>[
                    'placeholder' => 'Ariana,zone industrielle'
                ]
            ])
            ->add('specialite',ChoiceType::class,[
                'choices'  => [
                    'Nutritioniste' => 'Nutritioniste',
                    'Psychothérapeute' => 'Psychothérapeute',
                    'Coach Sportif' => 'Coach Sportif'
                ]
                ])
            ->add('justificatif',FileType::class, array('data_class' => null))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Coach::class,
        ]);
    }
}
