<?php
/**
 * Created by PhpStorm.
 * User: mateos
 * Date: 03/07/2017
 * Time: 12:54
 */

namespace AdSite\AdSiteBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditPicArticleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('photo', FileType::class, array('mapped' => false), array('label' => 'Photos 3','required'=>false) )
            ->add('Enregistrer', SubmitType::class, array('label' => 'Ajouter une photo', 'attr' => array('class' => 'but_connect')))
            ->getForm();
    }



}