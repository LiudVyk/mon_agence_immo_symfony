<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComposerRequireProfilerDevController extends AbstractController
{
    #[Route('/composer/require/profiler/dev', name: 'app_composer_require_profiler_dev')]
    public function index(): Response
    {
        return $this->render('composer_require_profiler_dev/index.html.twig', [
            'controller_name' => 'ComposerRequireProfilerDevController',
        ]);
    }
}
