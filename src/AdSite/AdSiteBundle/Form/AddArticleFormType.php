<?php

namespace AdSite\AdSiteBundle\Form;

use AdSite\AdSiteBundle\Entity\Articles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddArticleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('category', ChoiceType::class
                , array(
                    'choices' => array(
                        'Maybe' => null,
                        'Yes' => true,
                        'No' => false,
                    ),
                ), array('mapped' => false)
            )
            ->add('place', TextType::class)
            ->add('price', TextType::class)
            ->add('description', TextareaType::class)
            ->add('photos', FileType::class, array('mapped' => false))
            ->add('Annuler', SubmitType::class)
            ->add('Enregistrer', SubmitType::class)
            ->getForm();
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Articles::class,
        ));
    }
}