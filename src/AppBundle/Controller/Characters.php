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
            'base_uri' => 'https://akabab.github.io/starwars-api/api/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', 'all.json');
        $body = $response->getBody();
        $this->characters = json_decode($body);

        return $this->characters;
    }

}
