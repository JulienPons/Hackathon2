<?php

namespace AppBundle\Controller;

use GuzzleHttp\Client;

class Characters
{
    private $characters = [];

    public function __toString ()
    {
        return $this->characters['id'] . " - " . $this->characters['name'];
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
        $assoc = true;
        $this->characters = json_decode($body,$assoc);

        return $this->characters;
    }

    public function getOneByID($id) : array
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://akabab.github.io/starwars-api/api/id/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $url = $id . '.json';
        $response = $client->request('GET', $url);
        $body = $response->getBody();
        $assoc = true;
        $this->characters = json_decode($body,$assoc);

        return $this->characters;
    }

    /**
     * return all possible characters for of the affiliations 'Republic' or 'Empire'
     *
     * @param array $characters
     * @param string $affiliation
     *
     * @return array
     */
    public function getExtractByAffiliation(array $characters, string $affiliation) : array
    {
        $newCharacters = [];
        foreach ($characters as $id => $character) {
            if (isset($character['affiliations'])) {
                for ($i = count($character['affiliations']) - 1; $i >= 0; $i--) {
                    if (strpos($character['affiliations'][$i],$affiliation) !== false) {
                        $newCharacters[] = $character;
                        break;
                    }
                }
            }
        }
        return $newCharacters;
    }

    /*    public function getAllByParameter($key, $value) : array
        {
            $allCharacters = new Characters();
            $characters = $allCharacters->getAll();

            $newCharacters = [];
            foreach ($characters as $id => $character) {
                for ($i = 0; $i < count($character); $i++) {
                    if (isset($character[$key])) {
                        if (is_array($character[$key])) {
                            for ($j = count($character[$key]) - 1; $j >= 0; $j++) {

                            }
                        } else {
                            $newCharacters[] = $character;
                        }
                    }
                }
            }

            return $this->characters;
        }
    */

}
