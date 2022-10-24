<?php

    class DatabaseConnect
    {
        private $HOST;
        private $UserName;
        private $PassWord;
        private $DataBase;


        function __construct()
        {
            $this->HOST = "localhost";
            $this->UserName = "root";
            $this->PassWord = "";
            $this->DataBase = "api-php";
        }


        public function getConnection()
        {
            $db = new PDO('mysql:host=' . $this->HOST . ';dbname=' . $this->DataBase . '', $this->UserName, $this->PassWord) or die("Cannot connect to mySQL.");
            return $db;
        }

    }