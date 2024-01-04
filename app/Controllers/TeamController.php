<?php

namespace MVC\Controllers;
use MVC\Controllers\Controller;
use MVC\Model\Team;
use MVC\Model\Crud;
class TeamController extends Controller
{
    public function index():void
    {
        
    }
    function create(): void
    {
        
    }
    function add(): void
    {
        $target_dir = "C:/laragon/www/StreamStadium/public/images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) $uploadOk = 1;
            else $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) $uploadOk = 0;

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            header("Location: /streamstadium/Team/Team");
        // if everything is ok, try to upload file
        } 
        else move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        
        $team=new Team($_POST['name'],$_POST['coach'],$_POST['description'],$_POST['groupe'],$_POST['cups'],$_POST['federation'],$_FILES["image"]["name"]); 
        $team -> add_team();
        header('Location: /streamstadium/Team/team');
    }
    function destroy($id): void
    {
        $team=new Team;
        $team->setId($id);
        $team->destroy();
        header('Location: /streamstadium/Team/team');
    }
    function team(): void
    {
        $team = new Team();
        $teams=$team->showAllTeams();
        $this->render("views","team_dashboard","liste des equipes",$teams);
    }
    function update(int $id): void
    {
        $team=new Team($_POST['name'],$_POST['coach'],$_POST['description'],$_POST['groupe'],$_POST['cups'],$id);
        $team->edit();
        $teams=new Team;
        header('Location: /streamstadium/Team/team');
    }
    public function edit(int $id):void
    {
        $t=new Team();
        $t->setId($id);
        $team = $t->show();
        $this->render("views","updat_team","update des equipes",$team);
    }
}