<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/Carlos")
 */
class CarlosController extends Controller
{
    /**
     * @Route("")
     * @Method("GET")
     */
    public function findAction(Request $request)
    {
        $r=['STATUS'=> 'HOLA COMO ESTAS']; 
        return $this->json($r);
    }
}