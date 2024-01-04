<?php

namespace MVC\Controllers;
use MVC\Controllers\Controller;
use MVC\Model\Matchs;
use MVC\Model\stade as stade;
use MVC\Model\Team as team;

class HomeController extends Controller
{

    
    public function index(): void
    {   
        
      
    
        $match=new Matchs();
        $matchs=$match->showall();
        $stade=new Stade();
        $stades =$stade->showall();
        $team=new Team();
        $teams =$team->showall();
        $this->render("views","Home","Home",$matchs,$stades,$teams);  

        // TODO: Implement index() method.
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
    function about(): void
    {
        // TODO: Implement login() method.
        $this->render("views","about","About us");
    }

}