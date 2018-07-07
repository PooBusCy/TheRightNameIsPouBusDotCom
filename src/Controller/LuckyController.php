<?php
/**
 * Created by PhpStorm.
 * User: savvas
 * Date: 7/7/18
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{

     /**
      * @Route("/lucky/number")
      */
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}