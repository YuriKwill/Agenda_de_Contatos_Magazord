<?php

namespace App\Controller;

use App\Entity\Pessoa;
use App\Form\PessoaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PessoaController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/pessoa/novo", name="criar_novo_contato")
     */
    public function adicionar(Request $request): Response
    {
        $pessoa = new Pessoa();
        $form = $this->createForm(PessoaType::class, $pessoa);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($pessoa);
            $this->entityManager->flush();

            return $this->redirectToRoute('gerenciar_contatos');
        }

        return $this->render('pessoa/novo.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/pessoa/editar/{id}", name="editar_contato")
     */
    public function editar(Request $request, Pessoa $pessoa): Response
    {
        $form = $this->createForm(PessoaType::class, $pessoa);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('gerenciar_contatos');
        }

        return $this->render('pessoa/editar.html.twig', [
            'form' => $form->createView(),
            'contato' => $pessoa,
        ]);
    }

    /**
     * @Route("/pessoa/excluir/{id}", name="excluir_contato")
     */
    public function excluir(Pessoa $pessoa): Response
    {
        $this->entityManager->remove($pessoa);
        $this->entityManager->flush();

        return $this->redirectToRoute('gerenciar_contatos');
    }

    /**
     * @Route("/pessoa", name="gerenciar_contatos")
     */

    public function gerenciar(): Response
    {
        $contatos = $this->entityManager->getRepository(Pessoa::class)->findAll();

        return $this->render('pessoa/gerenciar.html.twig', [
            'contatos' => $contatos,
        ]);
    }
}
