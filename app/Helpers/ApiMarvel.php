<?php
namespace App\Helpers;

class ApiMarvel
{   private $Api;
    public function __construct()
        {
           $this -> http::withHeaders([
                'bearer','http://gateway.marvel.com/v1/public/characters?ts=1&apikey=aca88a65d1bdba5a7ff00fdffca1b707&hash=065470a88024c00ab55c46b9054218b6'
           ]);
        }

    public function getApi(): \Illuminate\Http\Client\PendingRequest
    {
        return $this -> api;
    }    
}