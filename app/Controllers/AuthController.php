<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;

class AuthController extends Controller
{

    function index(): void
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

    function sign_in(): void
    {
        // TODO: Implement login() method.
        $this->render("views","sign_in","Sign in");
    }
    function register(): void
    {
        // TODO: Implement login() method.
        $this->render("views","register","Register");
    }
    function profile(): void
    {
        // TODO: Implement login() method.
        $this->render("views","profile","Profile");
    }
}