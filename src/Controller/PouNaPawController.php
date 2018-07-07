<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PouNaPawController extends Controller
{
    /**
     * @Route("/", name="pou_bus_homepage")
     */
    public function homepage()
    {
        return $this->render('pou_na_paw/index.html.twig');
    }
}
