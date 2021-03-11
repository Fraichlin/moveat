<?php

namespace App\Form;

use App\Entity\Membre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MemberType extends AbstractType
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
            ->add('taille',NumberType::class,[
                'attr'=>[
                    'placeholder' => '1.86 (kg)'
                ]
            ])
            ->add('poids',NumberType::class,[
                'attr'=>[
                    'placeholder' => '75 (kg)'
                ]
            ])
            ->add('photo',FileType::class, array('data_class' => null))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Membre::class,
        ]);
    }
}
