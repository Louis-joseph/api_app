<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HowtoapiController extends AbstractController
{
    /**
     * @Route("/howtoapi", name="howtoapi")
     */
    public function index(): Response
    {
        return $this->render('howtoapi/index.html.twig', [
            'controller_name' => 'HowtoapiController',
        ]);
    }
}
