<?php

namespace App\Http\Controllers;

use App\Facades\ApiMarvel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function __invoke()
    
    {
       
       $endpoint = file_get_contents('http://gateway.marvel.com/v1/public/characters?ts=1&apikey=aca88a65d1bdba5a7ff00fdffca1b707&hash=065470a88024c00ab55c46b9054218b6');
       $jsonDecode = json_decode($endpoint,true);
       print_r($jsonDecode);
      

    }

    
}
