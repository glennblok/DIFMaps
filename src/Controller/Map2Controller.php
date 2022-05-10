<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Map2Controller extends AbstractController
{
    #[Route('/map2', name: 'map2')]
    public function index(): Response
    {
        return $this->render('map2/index.html.twig', [
            'controller_name' => 'Map2Controller',
        ]);
    }
}
