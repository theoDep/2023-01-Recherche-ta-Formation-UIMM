<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrainingController extends AbstractController
{
  private const TRAININGS = [
          ['title' => 'Concepteur Developpeur d\'applications', 'description' => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 'level' => 'Titre RNCP niveau 6 - Bac +3/4'],
          ['title' => 'Dev Web et Web Mobile', 'description' => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 'level' => 'Titre RNCP niveau 5 - Bac +2'],
          ['title' => 'Administrateur systeme', 'description' => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 'level' => 'Titre RNCP niveau 5 - Bac +2'],
          ['title' => 'Technicien reseau', 'description' => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 'level' => 'Titre RNCP niveau 5 - Bac +2'],
          ['title' => 'UI/UX Designer', 'description' => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 'level' => 'Titre RNCP niveau 5 - Bac +3'],
  ];

  #[Route('/training', name: 'app_training')]
  public function index(): Response
  {
    return $this->render('training/index.html.twig', [
        'controller_name' => 'TrainingController',
        'trainings' => self::TRAININGS
    ]);
  }

  #[Route('/training/{id}', name: 'app_training_details')]
  public function details(string $id, FormationRepository $trainingRepository): Response
  {
    return $this->render('training/details.html.twig', [
        'controller_name' => 'TrainingController',
        'training' => $trainingRepository->find($id)
    ]);
  }
}