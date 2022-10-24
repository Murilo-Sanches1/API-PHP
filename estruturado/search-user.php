<?php

    header("Content-type: application/json; charset=utf-8");

    include_once("config/connect.php");

    if ($_SERVER['REQUEST_METHOD'] == "GET") {

        if (isset($_GET['id'])) {
            $id  = $_GET['id']; 

            $query = mysqli_query($mysqli, "SELECT 
                                                firstname, lastname, email, username 
                                            FROM `user` 
                                            WHERE `id` = $id");
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

            $msg = array('message'=> $result);
            echo  json_encode($msg);

        } else {

            $query = mysqli_query($mysqli, 'SELECT * FROM user');
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

            $msg = array('message'=> $result);
            echo  json_encode($msg);
        }


    } else {
        
    }