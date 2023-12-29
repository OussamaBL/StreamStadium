<?php

namespace MVC\Controllers;
use MVC\Controllers\Controller;
class HomeController extends Controller
{
    public function index(): void
    {
        $this->render("views","Home","Home");
        // TODO: Implement index() method.
    }
    public function create(): void
    {
        // TODO: Implement create() method.
    }

    public function destroy(int $id): void
    {
        // todo: implement destroy() method.
    }

    public function update(int $id): void
    {
        // TODO: Implement update() method.
    }
    public function about(): void
    {
        // TODO: Implement login() method.
        $this->render("views","about","About us");
    }

}