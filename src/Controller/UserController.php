<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app.user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'user_name' => 6
        ]);
    }

    #[Route('/user/{name}', name: 'app.user.view')]
    public function userView(Request $req, string $name): Response
    {
        dd($req);
        return $this->render('user/index.html.twig', [
            "user_name" => $name
        ]);
    }
}
