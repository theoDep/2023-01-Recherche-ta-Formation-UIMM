<?php

namespace App\Controller;

use App\Entity\Code;
use App\Form\CodeType;
use App\Repository\CodeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/backoffice/code/type')]
class CodeTypeController extends AbstractController
{
    #[Route('/', name: 'app_code_type_index', methods: ['GET'])]
    public function index(CodeRepository $codeRepository): Response
    {
        return $this->render('code_type/index.html.twig', [
            'codes' => $codeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_code_type_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CodeRepository $codeRepository): Response
    {
        $code = new Code();
        $form = $this->createForm(CodeType::class, $code);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codeRepository->save($code, true);

            return $this->redirectToRoute('app_code_type_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('code_type/new.html.twig', [
            'code' => $code,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_code_type_show', methods: ['GET'])]
    public function show(Code $code): Response
    {
        return $this->render('code_type/show.html.twig', [
            'code' => $code,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_code_type_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Code $code, CodeRepository $codeRepository): Response
    {
        $form = $this->createForm(CodeType::class, $code);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codeRepository->save($code, true);

            return $this->redirectToRoute('app_code_type_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('code_type/edit.html.twig', [
            'code' => $code,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_code_type_delete', methods: ['POST'])]
    public function delete(Request $request, Code $code, CodeRepository $codeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$code->getId(), $request->request->get('_token'))) {
            $codeRepository->remove($code, true);
        }

        return $this->redirectToRoute('app_code_type_index', [], Response::HTTP_SEE_OTHER);
    }
}
