<?php

namespace App\Form;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;
use Vich\UploaderBundle\Form\Type\VichImageType;

class AdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('username')
            ->add('nom')
            ->add('prenom')
            ->add('password',PasswordType::class,[
                'attr'=>[
                    'value'=>'12345678'
                ]
                ])
            ->add('confirm_password',PasswordType::class,[
                'attr'=>[
                    'value'=>'12345678'
                ]
            ])
            ->add('imageFile', VichImageType::class, [
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
