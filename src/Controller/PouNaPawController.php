<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PouNaPawController extends Controller
{
    /**
     * @Route("/pou/na/paw", name="pou_na_paw")
     */
    public function index()
    {
        return $this->render('pou_na_paw/index.html.twig', [
            'controller_name' => 'PouNaPawController',
        ]);
    }
}
