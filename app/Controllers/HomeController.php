<?php

namespace MVC\Controllers;
use MVC\Controllers\Controller;
class HomeController extends Controller
{
    public function index():void{
        echo "ok";
    }
    public function contact():void{
        $this->render("views","contact","Contact");
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