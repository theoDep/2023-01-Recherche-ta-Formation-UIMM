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
        'training' => ['title' => 'Concepteur Développeur d\'Applications', 'level' => 'Bac+3', 'description' => 'Le CDA est un diplôme d\'état de niveau Bac+3 qui forme des développeurs web et mobiles. Il est accessible après un Bac ou un Bac+2. Il est reconnu par l\'Etat et permet d\'accéder à un emploi dans le secteur du numérique.'],
    ]);
  }
}