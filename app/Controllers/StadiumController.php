<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;
use MVC\Model\Stade;
use MVC\Model\Crud;

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
        // TODO: Implement create() method
    }

    function destroy($id): void
    {
        $team=new Stade;
        $team->setId($id);
        $team->destroy();
        header('Location: /streamstadium/Stadium/stade');
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
            header("Location: /streamstadium/Stadium/stade");
        // if everything is ok, try to upload file
        } 
        else move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        
        $stade=new Stade($_POST['name'],$_POST['city'],$_POST['adress'],$_POST['capacity'],$_FILES["image"]["name"]); 
        $stade -> add_stade();
        header('Location: /streamstadium/Stadium/stade');
    }
    public function edit($id):void
    {
        $s=new Stade();
        $s->setId($id);
        $stade = $s->show();
        $this->render("views","updat_stade","update des sdadium",$stade);
    }
    function updat($id): void
    {
        $stade=new Stade($_POST['name'],$_POST['city'],$_POST['adress'],$_POST['capacity'],"",$id);
        $stade->edit();
        $stades=new Stade;
        header('Location: /streamstadium/Stadium/stade');
    }
}