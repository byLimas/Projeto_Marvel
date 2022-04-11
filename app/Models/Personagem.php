<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Personagem extends Model
{
    use HasFactory;
   
    protected $table = "personagens";
    protected $fillable = ['id','nome','descricao','imagem','id_marvel'];

}
