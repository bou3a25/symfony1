<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LukyController extends AbstractController
{
    /**
     * @Route("/luky", name="luky1")
     */
    public function index(): Response
    {
        return $this->render('luky/index.html.twig', [
            'controller_name' => 'LukyController',
        ]);

        
    }
    /**
     * @Route("/luky/number/{max} ", name="luky",requirements="\b[0-9]+\b")
     */

    public function number(int $max): Response
    {
        $number = random_int(0, $max);
        return new Response("<h1>Lucky number: {$number} </h1>");
    }

    /**
     * @Route("/luky/number/{max?} ", name="luky",requirements="\b[0-9]+\b")
     */

    public function number2(?int $max): Response
    {
        if(!isset($max)){
            
        };
        $number = random_int(0, $max);
        return new Response("<h1>Lucky number: {$number} </h1>");
    }


}



