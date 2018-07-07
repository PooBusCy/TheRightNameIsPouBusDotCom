<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PouNaPawController extends Controller
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('pou_na_paw/index.html.twig');
    }

    /**
     * @Route("/about-us")
     * @return Response
     */
    public function test(){
        return $this->render('pou_na_paw/aboutus.html.twig');
    }
}
