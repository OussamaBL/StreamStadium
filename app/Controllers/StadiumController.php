<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;

class StadiumController extends Controller
{

    function index(): void
    {
        // TODO: Implement index() method.
    }

    public function details_stad():void{
        $this->render("views","stadium","Details de stade");
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