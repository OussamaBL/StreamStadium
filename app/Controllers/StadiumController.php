<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;
use MVC\Model\Stade;

class StadiumController extends Controller
{

    function index(): void
    {
        // TODO: Implement index() method.
    }
    // public function details_stad():void{
    //     $this->render("views","stadium","Details de stade");
    // }

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
    function stade(): void
    {
        $stade = new Stade;
        $stades=$stade->showAllStade();
        $this->render("views","stade_dashboard","Details de stade",$stades);
    }
}