<?php

    class UserController 
    {
        public function getAllUsers() 
        {
            try {
                $modelUser = new userModel();
                return $modelUser->getAllUsers();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        public function getUserById(Int $id) 
        {
            try {
                $modelUser = new userModel();
                return $modelUser->getUserById($id);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        public function insertUser(Array $user) 
        {
            try {
                $modelUser = new userModel();
                return $modelUser->insertUser($user);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }