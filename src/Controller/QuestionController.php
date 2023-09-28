<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    #[Route('/', name: 'app_question')]
    public function homepage(): Response
    {
        return new Response('What a bewiching controller we have conjured!');
    }

    #[Route('/questions/{slug}')]
    public function show(string $slug = null)
    {
        dump($this);
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => range(10, 20)
        ]);

    }
}
