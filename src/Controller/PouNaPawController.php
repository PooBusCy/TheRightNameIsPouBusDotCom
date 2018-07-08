<?php

namespace App\Controller;

use App\Entity\BusStop;
use App\Repository\BusStopRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
     * @Route("/tziame")
     * @return Response
     * @throws \RestClientException
     */
    public function tziame(){
        // @todo remove it
        $apiKey = "AIzaSyC3l5YJo32fjGjdXH6JHZsW5LyFpyz9WHs";
        $endpoint = "https://maps.googleapis.com/";
        $origin = "Ledras,+Nicosia";
        $destination = "Plateia+Solomou,+Nicosia,+Cyprus";
        $mode = "walking";
        $navigation_request = "maps/api/directions/json?origin=${origin}&destination=${destination}&key=${apiKey}&mode=${mode}";
        $api = new RestClient([
            'base_url' => $endpoint,
            'format' => "json",
            // https://dev.twitter.com/docs/auth/application-only-auth
            // 'headers' => ['Authorization' => 'Bearer '.OAUTH_BEARER],
        ]);
        $result = $api->get($navigation_request);
        var_dump($result->decode_response());
        // json_decode($response, true)
        // $resultArray = json_decode($result, true);
//        $resultArray = (array) $result;
//        // var_dump($resultArray['response']);
//        $resultBodyArray = (array) json_decode($resultArray['response']);
//        $legs = (array) $resultBodyArray['routes'][0];
        // var_dump($legs['legs'][0]);
  //      $stepsArray = (array) $legs['legs'][0];
        // var_dump($stepsArray);
    //    $steps = $legs['legs'][0]['steps'];
//        $responseHtml = "<ul>";
//        foreach ($steps as $step) {
//            $responseHtml = $responseHtml . "<li>" . $step['html_instructions'] . "</li>";
//        }
//        $responseHtml = $responseHtml . "</ul>";
        // $response = new Response($result->response);
        // $response->headers->set('Content-Type', 'application/json'
        //);
        $steps = [];
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
