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
        $googlePlaceApiKey = getenv('GOOGLE_PLACE_API_KEY');
        return $this->render('pou_na_paw/index.html.twig', ['googlePlaceApiKey' => $googlePlaceApiKey]);
    }

    /**
     * @Route("/about-us")
     * @return Response
     */
    public function aboutUs(){
        return $this->render('pou_na_paw/aboutus.html.twig');
    }

    /**
     * @Route("/reviews")
     */
    public function reviews(){
        return $this->render('pou_na_paw/reviews.html.twig');

    }

    public function getDirections($from, $to)
    {
        // find the nearest bus stop from $from
        // $find the nearest bus stop from $to
    }
}
