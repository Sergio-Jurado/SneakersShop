<?php

namespace App\Form;

use App\Entity\Sneaker;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormTypeInterface;

class SneakerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('brand')
            ->add('model')
            ->add('type')
            ->add('price')
            ->add('photos', CollectionType::class, [
                'entry_type' => PhotoType::class,
                'allow_add' => true,
                'by_reference' => false,
                'prototype' => true,
                'allow_delete' => true,
                'label' => false,
                'entry_options' => ['label' => false]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sneaker::class,
        ]);
    }
}
