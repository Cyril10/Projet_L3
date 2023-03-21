<?php

namespace App\Form;

use App\Entity\NFTCreation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NFTformType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', options:[
                'label' => false
            ])
            ->add('Prenom', options:[
                'label' => false
            ])
            ->add('D_naissance', options:[
                'years'=>range(1900, 2023),
                'label' => 'Date de naissance'
            ]
            )
            ->add('Lieu_naissance', options:[
                'label' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NFTCreation::class,
        ]);
    }
}