<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;
use MVC\Model\Matchs;
use MVC\Model\stade as stade;
use MVC\Model\Team as team;

class MatchController extends Controller
{
    private $MatchID;

    public function index(): void
    {
        // TODO: Implement index() method.
    }
    public function details_match($id):void{
        $match=new Matchs();
        $this->MatchID = $id;
        $match->setId($id);
        $matchs=$match->show(); 
        $this->render("views","details_match","details_match",$matchs);
    }
    public function reservation($id):void{
        
        $match=new Matchs();
        $this->MatchID = $id;
        $match->setId($id);
        $matchs=$match->show();
        $this->render("views","reservation","Match reservation",$matchs);
    }
    function create(): void
    {
        // TODO: Implement create() method.
    }

    function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }

    function update(int $id): void
    {
        // TODO: Implement update() method.
    }

    function match(): void
    {   $match=new Matchs();
        $matchs=$match->showall();
        // TODO: Implement login() method.
        $this->render("views","match","Match",$matchs);
    }
}