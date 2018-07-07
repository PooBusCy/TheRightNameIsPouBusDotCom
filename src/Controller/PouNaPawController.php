<?php

namespace App\Controller;

use App\Entity\BusStop;
use App\Repository\BusStopRepository;
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
    public function aboutUs(){
        return $this->render('pou_na_paw/aboutus.html.twig');
    }

    public function getDirections($from, $to)
    {
        // find the nearest bus stop from $from
        // $find the nearest bus stop from $to
    }
}
