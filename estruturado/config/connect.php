<?php

    $HOST = "localhost";
    $UserName = "root";
    $PassWord = "";
    $DataBase = "api-php";

    $mysqli = mysqli_connect($HOST, $UserName, $PassWord, $DataBase)
        or die("Error " . mysqli_error($mysqli));
    if (!$mysqli) {
        echo "Falha ao conectar ao Banco de Dados";
    }