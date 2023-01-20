<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $builder
        ->add('name')
        ->add('studies_level')
        ->add('codes')
        ->add('jobs')
        ->add('conditions')
        ->add('costs')
        ->add('locations')
        ->add('sequels')
        ->add('formats')
        ->add('duration')
    ;
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults([
        'data_class' => Formation::class,
    ]);
  }
}