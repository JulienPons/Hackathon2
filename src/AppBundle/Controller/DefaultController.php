<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/profile.html.twig');
    }

    /**
     * @Route("/choices", name="choices")
     */
    public function choicesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/choices.html.twig');
    }

    /**
     * @Route("/matches", name="matches")
     */
    public function matchesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/matches.html.twig');
    }

}
