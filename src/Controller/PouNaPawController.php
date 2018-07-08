<?php

namespace App\Controller;

use App\Entity\BusStop;
use App\Repository\BusStopRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use \RestClient;

class PouNaPawController extends Controller
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        $googlePlaceApiKey = getenv('GOOGLE_PLACE_API_KEY');
        return $this->render('pou_na_paw/index.html.twig', ['googlePlaceApiKey' => $googlePlaceApiKey, 'steps' => []]);
    }

    /**
     * @Route("/about-us")
     * @return Response
     */
    public function aboutUs(){
        return $this->render('pou_na_paw/aboutus.html.twig');
    }

    /**
     * @Route("/tziame")
     * @param Request $request
     * @return Response
     */
    public function tziame(Request $request){
        // @todo remove it
        $origin = $request->request->get('start');

        $destination = $request->request->get('end');

        $api_key = getenv('GOOGLE_PLACE_API_KEY');

        $t = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?origin=".$origin."&destination=".$destination."&key=".$api_key);

        $all = json_decode($t,true);

        $steps = $all['routes'][0]['legs'][0]['steps'];

        return $this->render('pou_na_paw/index.html.twig', ['steps' => $steps]);
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
