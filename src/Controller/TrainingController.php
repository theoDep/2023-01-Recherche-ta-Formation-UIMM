<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrainingController extends AbstractController
{
  #[Route('/training', name: 'app_training')]
  public function index(): Response
  {
    return $this->render('training/index.html.twig', [
        'controller_name' => 'TrainingController',
        'trainings' => [
          ['title' => 'Concepteur Developpeur d\'applications', 'description' => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 'level' => 'Titre RNCP niveau 6 - Bac +3/4'],
          ['title' => 'Dev Web et Web Mobile', 'description' => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 'level' => 'Titre RNCP niveau 5 - Bac +2'],
          ['title' => 'Administrateur systeme', 'description' => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 'level' => 'Titre RNCP niveau 5 - Bac +2'],
          ['title' => 'Technicien reseau', 'description' => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 'level' => 'Titre RNCP niveau 5 - Bac +2'],
          ['title' => 'UI/UX Designer', 'description' => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 'level' => 'Titre RNCP niveau 5 - Bac +3'],
        ]
    ]);
  }
}