<?php

namespace phnx\VccBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
        	->add('user',new UserType())
            ->add('termsagreed','checkbox')
        ;
    }

    public function getName()
    {
        return 'phnx_vccbundle_registrationtype';
    }
}
