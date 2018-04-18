<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MyControllerController extends Controller
{
    /**
     * @Route("/my-route")
     */
    public function myAction()
    {
        return $this->render('AppBundle:MyController:my.html.twig', array(
            // ...
        ));
    }

}
