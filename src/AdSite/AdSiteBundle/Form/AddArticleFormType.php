<?php

namespace AdSite\AdSiteBundle\Form;

use AdSite\AdSiteBundle\Entity\Articles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
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
            ->add('title', TextType::class, array('label' => 'Titre'))
            ->add('category', ChoiceType::class
                , array(
                    'choices' => array(
                        'Automobile' => 'Automobile',
                        'Informatique' => 'Informatique',
                        'Emplois' => 'Emplois',
                    ),
                ), array('mapped' => false)
            )

            ->add('place', TextType::class, array('label' => 'Lieu'))
            ->add('price', NumberType::class, array('label' => 'Prix'))
            ->add('description', TextareaType::class, array('label' => 'Description'))
            ->add('photos', FileType::class, array('mapped' => false), array('label' => 'Photos') )
            ->add('Enregistrer', SubmitType::class, array('label' => 'Ajouter', 'attr' => array('class' => 'but_connect')))
            ->getForm();
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Articles::class,
        ));
    }
}