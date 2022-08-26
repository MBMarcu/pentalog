<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AffordabilityController extends AbstractController
{
    /**
     * @Route("/", name="affordability_index", methods={"GET", "HEAD"} )
     * @return Response
     */
    public function index()
    {
        return $this->render('affordability/show.html.twig');
    }







}