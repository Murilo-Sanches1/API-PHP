<?php

    include_once("config/connect.php");

    if ($_SERVER['REQUEST_METHOD'] == "PUT") {
        
        $data = json_decode(file_get_contents('php://input'), true);

        $id = $_GET['id'];
        $firstname  = $data['firstname'];
        $lastname   = $data['lastname'];
        $password   = $data['password'];
        $email      = $data['email'];

        $custo = '12';
        $salt = 'Cf1f11ePArKlBJomM0F6aJ';

        $securePassword = crypt($password, '$2a$' . $custo . '$' . $salt . '$');

        $query = mysqli_query($mysqli, "UPDATE 
                                            `user` 
                                        SET 
                                            `firstname`='$firstname',`lastname`='$lastname',`email`='$email', `password`='$securePassword'
                                        WHERE id = '$id'");

        $msg = array('message'=> "Atualização efetuada com sucesso.");
        echo  json_encode($msg);

    } else {
        
    }