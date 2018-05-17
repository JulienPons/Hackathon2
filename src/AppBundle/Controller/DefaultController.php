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
     * @Route("/xenophiliac", name="xenophiliac")
     */
    public function xenophiliacAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/xenophiliac.html.twig');
    }
    /**
     * @Route("/objectum_sexual ", name="objectum_sexual")
     */
    public function objectumSexualAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/objectum_sexual.html.twig');
    }
    /**
     * @Route("/forbidden", name="forbidden")
     */
    public function forbiddenAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/forbidden.html.twig');
    }
    /**
     * @Route("/soulmate", name="soulmate")
     */
    public function soulmateAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/soulmate.html.twig');
    }

    /**
     * @Route("/choices", name="choices")
     */
    public function choicesAction(Request $request)
    {
        $allCharacters = new Characters();
        $characters = $allCharacters->getAll();
    
        return $this->render('default/choices.html.twig', [
            'characters' => $characters,
        ]);
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
        $charactersManager = new Characters();
        $allCharacters = $charactersManager->getAll();
        $empireCharacters = $charactersManager->getExtractByAffiliation($allCharacters,'Republic');
        $republicCharacters = $charactersManager->getExtractByParameterAndValue($allCharacters, 'affiliations','Empire');

        return $this->render('default/test.html.twig', [
            'characters' => $republicCharacters,
        ]);
    }

    /**
     * @Route("/credit", name="credit")
     */
    public function creditAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/credit.html.twig');
    }

}
