<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ApiController;
use PhpParser\Node\Stmt\While_;

class PersonagemController extends Controller
{
    public function index()
    {
        
     $personagem = Personagem::all();
      return view('welcome',compact('personagem'));

    }

    public function personagem()
    {
        $offset = 0;
        
        while ($offset<= 1600){
            print_r($offset);
            $endpoint = file_get_contents('http://gateway.marvel.com/v1/public/characters?ts=1&apikey=aca88a65d1bdba5a7ff00fdffca1b707&hash=065470a88024c00ab55c46b9054218b6&limit=100&offset='.$offset);
            $jsonDecode = json_decode($endpoint,true);
            
            if($jsonDecode["data"]["count"] == 0){
                break;
            }
            
            foreach($jsonDecode["data"]["results"] as $api_heroi){
                $personagem = new Personagem;  
                $personagem->nome = $api_heroi["name"];
                $personagem->descricao = $api_heroi["description"];
                $personagem->imagem = $api_heroi["thumbnail"]["path"].".".$api_heroi["thumbnail"]["extension"];
                $personagem->favorito = false;
                $personagem->id_marvel =$api_heroi["id"];
                $personagem->save();
            }

            $offset =+ 100;
        }
      
        return Personagem::all();
    }
    
}
