<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;

class MatchController extends Controller
{

    public function index(): void
    {
        // TODO: Implement index() method.
    }
    public function details_match():void{
        $this->render("views","details_match","Details de matche");
    }
    public function reservation():void{
        $this->render("views","reservation","Match reservation");
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
    {
        // TODO: Implement login() method.
        $this->render("views","match","Match");
    }
}