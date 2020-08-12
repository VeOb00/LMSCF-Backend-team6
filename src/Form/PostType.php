<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('subtitle')
            ->add('datePublished')
            ->add('authorFn')
            ->add('authorLn')
            ->add('imageMain')
            ->add('imageMiddle')
            ->add('imageBottom')
            ->add('excerpt')
            ->add('introText')
            ->add('mainText')
            ->add('outroText')
            ->add('post_type')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}