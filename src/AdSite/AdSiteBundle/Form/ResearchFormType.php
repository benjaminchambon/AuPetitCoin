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

class ResearchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('keywords', TextType::class, array('label' => 'Titre'))
            ->add('category', ChoiceType::class, array('label' => 'Catégorie ','choices' => array(
                        'Tous' => 'Tous',
                        'Automobile' => 'Automobile',
                        'Informatique' => 'Informatique',
                        'Emplois' => 'Emplois',
                ),
                ), array('mapped' => false)
            )
            ->add('city', TextType::class, array('label' => 'Ville'))
            ->add('distance', ChoiceType::class
                , array('label' => 'Distance ',
                    'choices' => array(
                        'France entière' => 3000,
                        '0 à 10 km' => 10,
                        '0 à 50 km' => 50,
                        '0 à 300 km' => 300,
                    ),
                ), array('mapped' => false)
            )
            ->add('Rechercher', SubmitType::class, array('label' => 'Rechercher', 'attr' => array('class' => 'but_connect')))
            ->getForm();
    }
}