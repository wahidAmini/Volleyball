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
        //var_dump($request->getBody());
        new View('players/addPlayer', $request->getForm());
    }

    public function insert($request){
        Player::create($request->getForm());

        header('loaction: /players');
    }

    public function edit($request, $id){
        new View('players/updatePlayer', $request->getForm());
    }

    public function update($request, $id){
        Player::update($request->getForm());
    }

    public function delete($request, $id){
        Player::delete($id);
    }
    
}