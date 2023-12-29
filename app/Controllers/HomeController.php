<?php

namespace MVC\Controllers;
use MVC\Controllers\Controller;
class HomeController extends Controller
{

    public function index(): void
    {
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