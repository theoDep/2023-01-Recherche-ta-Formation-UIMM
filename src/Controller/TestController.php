<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
  #[Route('/test', name: 'app_test')]
  public function index(): Response
  {
    return $this->render('test/index.html.twig', [
        'controller_name' => 'TestController',
        'trainings' => [
          ['title' => 'Training 1', 'description' => 'Description 1', 'level' => 'Beginner'],
          ['title' => 'Training 2', 'description' => 'Description 2', 'level' => 'Intermediate'],
          ['title' => 'Training 3', 'description' => 'Description 3', 'level' => 'Advanced'],
          ['title' => 'Training 1', 'description' => 'Description 1', 'level' => 'Beginner'],
          ['title' => 'Training 2', 'description' => 'Description 2', 'level' => 'Intermediate'],
          ['title' => 'Training 3', 'description' => 'Description 3', 'level' => 'Advanced'],
          ['title' => 'Training 1', 'description' => 'Description 1', 'level' => 'Beginner'],
          ['title' => 'Training 2', 'description' => 'Description 2', 'level' => 'Intermediate'],
          ['title' => 'Training 3', 'description' => 'Description 3', 'level' => 'Advanced'],
        ]
    ]);
  }
}