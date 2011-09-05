<?php

namespace phnx\TrainingPlannerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TrainingPlanType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('startdate','date')
            //->add('user')
        ;
    }

    public function getName()
    {
        return 'phnx_trainingplannerbundle_trainingplantype';
    }
}
