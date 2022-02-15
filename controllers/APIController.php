<?php 

namespace Controllers;

use Classes\Email;
use Model\Project;

class APIController{
    public static function index(){
        $projectos = Project::get(3);
        echo json_encode($projectos);
    }

    public static function sendEmail(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = new Email($_POST['email'], $_POST['nombre'], $_POST['asunto'], $_POST['mensaje']);
            $email->enviarEmail();
            echo json_encode($_POST);
        }
    }

    public static function proyectos(){
        $projectos = Project::all();
        echo json_encode($projectos);
    }
}