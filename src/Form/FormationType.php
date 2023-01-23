<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class FormationType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $builder
      ->add('name')
      ->add('studies_level')
      ->add('descriptive')
      ->add('codes')
      ->add('jobs')
      ->add('conditions')
      ->add('costs')
      ->add('locations')
      ->add('sequels')
      ->add('formats')
      ->add('duration')
      ->add('duration_entreprise')
      ->add('results')
      ->add('certifications')
      ->add('state', ChoiceType::class, [
        'choices'  => [
          'Hors ligne' => false,
            'En ligne' => true,
        ],
      ])
    ;
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults([
        'data_class' => Formation::class,
    ]);
  }
}