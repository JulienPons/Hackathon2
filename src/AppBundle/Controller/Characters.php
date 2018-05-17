<?php

namespace AppBundle\Controller;

use GuzzleHttp\Client;

class Characters
{
    private $characters = [];

    public function __toString ()
    {
        // TODO: Implement __toString() method.
    }

    public function getAll() : array
    {

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://cdn.rawgit.com/akabab/superhero-api/0.2.0/api/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', 'all.json');
        $body = $response->getBody();
        $allCharacters = json_decode($body);

        return $allCharacters;
    }

}
