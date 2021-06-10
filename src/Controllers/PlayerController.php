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

    /*
    public function show($request, $id)
    {
        $animal = Animal::getById($id);

        var_dump($animal);
    }

    public function create($request)
    {
        var_dump($request->getBody());
    }
    */
}