<?php
namespace App\models;
use App\models\Ronda;
use App\models\Jugador;

class Partida
{ 
    public $maximoPlenos=3;
    public $restaurarPlenos=0;
    function crearPlayer(){
        $player = new Jugador;
        $player->crearRonda();
        $player->crearRonda();
    }
}
