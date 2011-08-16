<?php

namespace phnx\VccBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('nickname')
            ->add('emailaddress')
            ->add('password','repeated',array(
            	'first_name'=>'password',
            	'second_name'=>'confirm',
            	'type'=>'password'
            ))
        ;
    }
	public function getDefaultOptions(array $options) {
		return array(
			'data_class'=>'phnx\VccBundle\Entity\User',
		);
			
	}
    public function getName()
    {
        return 'phnx_vccbundle_usertype';
    }
}
