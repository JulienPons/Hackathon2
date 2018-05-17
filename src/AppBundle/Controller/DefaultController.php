<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Characters;
use GuzzleHttp\Client;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
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

    /**
     * @Route("/test", name="test")
     */
    public function testAction(Request $request)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://akabab.github.io/starwars-api/api/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', 'all.json');
        $body = $response->getBody();
        $characters = json_decode($body);

        return $this->render('default/test.html.twig', [
            'characters' => $characters,
        ]);
    }

}
