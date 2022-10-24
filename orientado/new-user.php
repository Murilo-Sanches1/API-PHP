<?php

    header("Content-type: application/json; charset=utf-8");

    require_once('service/DatabaseConnect.php');
    require_once('entity/UserEntity.php');
    require_once('model/UserModel.php');
    require_once('controller/UserController.php');

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $data = json_decode(file_get_contents('php://input'), true);

        $userController = new userController();
        $userController->insertUser($data);
        
    }