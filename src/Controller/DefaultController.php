<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DefaultController extends AbstractController
{
    #[Route('')]
    public function index(): Response
    {
        $text = '
            <p>Some text with a <a href="https://www.google.com/">Link to Google</a>.
        ';

        return $this->render('index.html.twig', [
            'text' => $text,
        ]);
    }
}
