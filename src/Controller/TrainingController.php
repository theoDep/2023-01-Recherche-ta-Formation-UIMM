<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrainingController extends AbstractController
{
  #[Route('/training', name: 'app_training')]
  public function index(FormationRepository $trainingRepository): Response
  {
    return $this->render('training/index.html.twig', [
        'controller_name' => 'TrainingController',
        'trainings' => $trainingRepository->findAll()
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