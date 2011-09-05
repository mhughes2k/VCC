<?php

namespace phnx\TrainingPlannerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EntryType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('date','date')
            ->add('sleep')
            ->add('fatigue')
            ->add('stress')
            ->add('Soreness')
            ->add('RestingHeartRate')
            ->add('Weight')
            ->add('PlannedWorkout')
            ->add('Weather','choice',
            	array(
            	'choices'=>
					array(
					''=>"",
					'Sunny'=>'Sunny',
					'Cloudy'=>'Cloudy',
					'Rain'=>'Rain',
					'Snow'=>'Snow',
					),
				'multiple'=>false
            	)
            )
            ->add('Route')
            ->add('Distance')
            ->add('Duration')
            ->add('AverageHeartRate')
            ->add('Zone1')
            ->add('Zone2')
            ->add('Zone3')
            ->add('Zone4')
            ->add('Zone5')
            ->add('WorkoutRating')
            ->add('Notes')
            ->add('Nutrition')
//            ->add('trainingplan')
        ;
    }

    public function getName()
    {
        return 'phnx_trainingplannerbundle_entrytype';
    }
}
