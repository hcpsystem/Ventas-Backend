<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/usuario")
 */
class UsuariosController extends Controller
{
    /**
     * @Route("")
     * @Method("GET")
     */
    public function findAction(Request $request)
    {
        $r=['STATUS'=> 'HOLA']; 
        return $this->json($r);
    }
}