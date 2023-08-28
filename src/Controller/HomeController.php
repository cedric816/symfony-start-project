<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        $users = [
            [
                "id" => 1,
                "name" => "john"
            ],
            [
                "id" => 2,
                "name" => "Maria"
            ],
            [
                "id" => 3,
                "name" => "Dominique"
            ]
            ];

        return $this->render('home/index.html.twig', [
            "users" => $users
        ]);
    }
}
