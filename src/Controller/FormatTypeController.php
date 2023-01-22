<?php

namespace App\Controller;

use App\Entity\Format;
use App\Form\FormatType;
use App\Repository\FormatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/backoffice/format/type')]
class FormatTypeController extends AbstractController
{
    #[Route('/', name: 'app_format_type_index', methods: ['GET'])]
    public function index(FormatRepository $formatRepository): Response
    {
        return $this->render('format_type/index.html.twig', [
            'formats' => $formatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_format_type_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FormatRepository $formatRepository): Response
    {
        $format = new Format();
        $form = $this->createForm(FormatType::class, $format);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formatRepository->save($format, true);

            return $this->redirectToRoute('app_format_type_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('format_type/new.html.twig', [
            'format' => $format,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_format_type_show', methods: ['GET'])]
    public function show(Format $format): Response
    {
        return $this->render('format_type/show.html.twig', [
            'format' => $format,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_format_type_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Format $format, FormatRepository $formatRepository): Response
    {
        $form = $this->createForm(FormatType::class, $format);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formatRepository->save($format, true);

            return $this->redirectToRoute('app_format_type_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('format_type/edit.html.twig', [
            'format' => $format,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_format_type_delete', methods: ['POST'])]
    public function delete(Request $request, Format $format, FormatRepository $formatRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$format->getId(), $request->request->get('_token'))) {
            $formatRepository->remove($format, true);
        }

        return $this->redirectToRoute('app_format_type_index', [], Response::HTTP_SEE_OTHER);
    }
}
