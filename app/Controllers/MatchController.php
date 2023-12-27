<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;

class MatchController extends Controller
{

    function index(): void
    {
        // TODO: Implement index() method.
    }
    public function details_match():void{
        echo "hello";
        //$this->render("views","details_match","Details de matche");
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
}