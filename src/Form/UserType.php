<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
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
            ])
            ->add('password',PasswordType::class,[
                'empty_data'=>''])
            ->add('confirm_password',PasswordType::class)
            ->add('sexe',ChoiceType::class,[
                 'choices' => [
                     'Homme' => 'Homme',
                     'Femme' => 'Femme'
                 ]])
//coach            ->add('telephone')
//membre            ->add('taille')
//membre            ->add('poids')
//coach            ->add('specialite')
//coach            ->add('adresse')
            ->add('photo',FileType::class, array('data_class' => null))
//coach            ->add('justificatif')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
