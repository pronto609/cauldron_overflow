<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        return new Response(sprintf(
            'Feature page to show a question "%s"!',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
}
