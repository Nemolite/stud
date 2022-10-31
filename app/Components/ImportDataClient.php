<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportDataClient
{
    public $client;

    public function __constructor(){
        $this->client = new Client(
            [
                'base_uri' => 'https://jsonplaceholder.typicode.com/',
                'timeout'=>2.0,
                'verify'=>false
            ]
        );
    }

}
