<?php

namespace App\Providers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class ApiMarvelProvider extends ServiceProvider
{
     /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Api-Marvel', function()
        {
           return  http::withOptions([
               'verify' => false,
               'base_uri' => 'http://gateway.marvel.com/v1/public/characters?ts=1&apikey=aca88a65d1bdba5a7ff00fdffca1b707&hash=065470a88024c00ab55c46b9054218b6'
           ])
           ->withHeaders([
                'bearer','http://gateway.marvel.com/v1/public/characters?ts=1&apikey=aca88a65d1bdba5a7ff00fdffca1b707&hash=065470a88024c00ab55c46b9054218b6'
           ]);
        });
        
    }
}