<?php

    include_once("config/connect.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $data = json_decode(file_get_contents('php://input'), true);

        $firstname  = $data['firstname'];
        $lastname   = $data['lastname'];
        $email      = $data['email'];
        $username   = $data['username'];
        $password   = $data['password'];
        $bio        = $data['bio'];
        
        $custo = '12';
        $salt = 'Cf1f11ePArKlBJomM0F6aJ';

        $hash = crypt($email, '$2a$' . $custo . '$' . $salt . '$');
        $securePassword = crypt($password, '$2a$' . $custo . '$' . $salt . '$');


        $query = mysqli_query($mysqli, "INSERT INTO `user`(`firstname`, `lastname`, `email`, `username`, `password`, `hash`, `twoFactor`) 
                                                    VALUES ('$firstname', '$lastname', '$email', '$username', '$securePassword', '$hash', false)");

        $msg = array('message'=> "Cadastro efetuado com sucesso.");
        echo  json_encode($msg);

    } else {
        
    }