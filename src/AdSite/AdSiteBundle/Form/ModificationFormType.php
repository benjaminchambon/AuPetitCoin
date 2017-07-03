<?php

namespace AdSite\AdSiteBundle\Form;

use AdSite\AdSiteBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModificationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login', TextType::class, array('label' => 'Login'))
            ->add('password', RepeatedType::class,
                array('type' => PasswordType::class,
                    'invalid_message' => 'Les mots de passe ne sont pas identiques',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options'  => array('label' => 'Mot de passe'),
                    'second_options' => array('label' => 'Repeter le mot de passe')))
            ->add('email', EmailType::class, array('label' => 'Email'))
            ->add('phone', TextType::class, array('label' => 'Téléphone'))
            ->add('city', TextType::class, array('label' => 'Ville'))
            ->add('Modifier', SubmitType::class, array('label' => 'Modifier', 'attr' => array('class' => 'but_connect')))
            ->getForm();
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}