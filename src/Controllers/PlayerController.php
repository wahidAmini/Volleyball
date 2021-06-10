<?php

namespace Controllers;

use Core\View;
use Models\Player;

class PlayerController
{
    public function index()
    {
        $players = Player::all();

        new View('players/index', compact("players"));
    }

    
    public function show($request, $id)
    {
        $player = Player::getById($id);
        new View('players/showOnePlayer', compact("player"));
        //var_dump($player);
    }

    public function create($request)
    {
        var_dump($request->getBody());
       // new View('players/addPlayer', compact("players"));
    }
    
}