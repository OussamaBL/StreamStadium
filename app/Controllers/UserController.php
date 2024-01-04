<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;
use MVC\Model\User;
class UserController extends Controller
{
    public function index():void
    {
       
    }

    function create(): void
    {
        
    }
    function add(): void
    {
        $user = new User($_POST['full_name'],$_POST['email'],$_POST["age"],$_POST['phone'],$_POST['cin'],$_POST['password'],$_POST['role']); 
        // $user -> add_user();
        header('Location: /streamstadium/User/user');
    
    }
    function destroy(int $id): void
    {
        $user=new User;
        $user->setId($id);
        $user->destroy();
        header('Location: /streamstadium/User/user');
    }
    function update(int $id): void
    {
        
    }
    public function edit(int $id):void{

    }
    function user(): void
    {
        $user = new User;
        $users=$user->showAll();
        $this->render("views","user_dashboard","liste des equipes",$users);
    }
    
}