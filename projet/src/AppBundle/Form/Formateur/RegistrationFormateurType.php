<?php
namespace AppBundle\Form\Formateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('numtel')
            ->add('type')
            ->add('dateNaissance')
            ->add('matiere',EntityType::class, array(
                // query choices from this entity
                'class' => 'AppBundle:Matiere',

                // use the User.username property as the visible option string
                'multiple'=>true,
                'choice_label' => 'nom',

            ))
        ;
    }


    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Formateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_formateur';
    }


}
