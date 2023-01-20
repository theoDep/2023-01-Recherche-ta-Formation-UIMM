<?php

namespace App\Controller;

use App\Entity\Skill;
use App\Form\SkillType;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/skill/type')]
class SkillTypeController extends AbstractController
{
    #[Route('/', name: 'app_skill_type_index', methods: ['GET'])]
    public function index(SkillRepository $skillRepository): Response
    {
        return $this->render('skill_type/index.html.twig', [
            'skills' => $skillRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_skill_type_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SkillRepository $skillRepository): Response
    {
        $skill = new Skill();
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $skillRepository->save($skill, true);

            return $this->redirectToRoute('app_skill_type_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('skill_type/new.html.twig', [
            'skill' => $skill,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_skill_type_show', methods: ['GET'])]
    public function show(Skill $skill): Response
    {
        return $this->render('skill_type/show.html.twig', [
            'skill' => $skill,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_skill_type_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Skill $skill, SkillRepository $skillRepository): Response
    {
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $skillRepository->save($skill, true);

            return $this->redirectToRoute('app_skill_type_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('skill_type/edit.html.twig', [
            'skill' => $skill,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_skill_type_delete', methods: ['POST'])]
    public function delete(Request $request, Skill $skill, SkillRepository $skillRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$skill->getId(), $request->request->get('_token'))) {
            $skillRepository->remove($skill, true);
        }

        return $this->redirectToRoute('app_skill_type_index', [], Response::HTTP_SEE_OTHER);
    }
}
