<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/henry")
 */
class HenryController extends Controller
{
    /**
     * @Route("")
     * @Method("GET")
     */
    public function findAction(Request $request)
    {
        $r=['STATUS'=> 'HOLA Henry']; 
        return $this->json($r);
    }
}