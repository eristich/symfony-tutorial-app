<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(): Response
    {
        $users = [
            [
                'firstname' => 'Esteban',
                'lastname' => 'Ristich',
                'age' => 21
            ],
            [
                'firstname' => 'Martin',
                'lastname' => 'Durand',
                'age' => 58
            ],
            [
                'firstname' => 'Geremy',
                'lastname' => 'Cavelin',
                'age' => 13
            ]
        ];
        return $this->render('user/index.html.twig', [
            'users' => $users
        ]);
    }

    #[Route('/user/{name}', name: 'user.view')]
    public function userView(Request $req, string $name): Response
    {
        dd($req);
        return $this->render('user/index.html.twig', [
            "user_name" => $name
        ]);
    }
}
