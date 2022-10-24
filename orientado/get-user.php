<?php

    header("Content-type: application/json; charset=utf-8");

    require_once('service/DatabaseConnect.php');
    require_once('model/UserModel.php');
    require_once('controller/UserController.php');

    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        $userController = new userController();

        if(isset($_GET['id'])) {
            $id = addslashes($_GET['id']);

            $users = $userController->getUserById($id);
        } else {        
            $users = $userController->getAllUsers();
        }

        echo json_encode($users);
    }