<?php

namespace App\Form;

use App\Entity\Permi;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermiFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('NumeroPermi', options : [
                'label'=> false
            ])
            ->add('TypeVehicule', options : [
                'label'=> false
            ])
            ->add('NEPH', options : [
                'label'=> false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Permi::class,
        ]);
    }
}