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
        $team = Team::getById($id);

        var_dump($team);
    }
    */
    public function create($request)
    {
        new View('teams/addTeam', $request->getForm());
    }

    public function insert($request){
        Team::create($request->getForm());
    }

    public function edit($request, $id)
    {
        new View('teams/editTeam', $request->getForm());
    }

    public function update($request, $id){
        Team::update($request->getForm());
    }

    public function delete($request, $id){
        //var_dump($request);
       Team::delete($id);
    }
    
}