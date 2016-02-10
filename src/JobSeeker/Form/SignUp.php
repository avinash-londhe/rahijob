<?php
/**
 * Sign up form.
 * @author: avinash londhe
 */

namespace JobSeeker\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

use Symfony\Component\Validator\Constraints\Length;

class SignUp extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class, array(
                'constraints' => new Length(array(
                    'max' => 15,
                    'minMessage' => 'Password should have max 15 character',
                    'min' => 8,
                    'minMessage' => 'Password should have at least 8 character',
                ))
            ))
            ->add('signup', SubmitType::class)
            ->add('clear', ButtonType::class);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JobSeeker\Entity\JobSeeker'
        ));
    }

}