<?php

namespace Controllers;

use Core\View;
use Models\Team;

class TeamController
{
    public function index()
    {
        $teams = Team::all();

        new View('teams/index', compact("teams"));
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