<?php

    class UserModel 
    {
        public function getAllUsers()
        {
            try {           
                $conn = new databaseConnect();

                $db = $conn->getConnection();

                $command = $db->prepare("SELECT * FROM user");
                $command->execute();
                $result = $command->fetchAll(PDO::FETCH_OBJ);

                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function getUserById(Int $id) 
        {
            try {           
                $conn = new databaseConnect();

                $db = $conn->getConnection();

                $command = $db->prepare("SELECT * FROM user WHERE id = $id");
                $command->execute();
                $result = $command->fetchAll(PDO::FETCH_OBJ);

                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function insertUser(Array $user) 
        {
            try {
                $securePass = $this->createHash(addslashes($user["password"]), 'password');
                $dataHash   = addslashes($user['password']) . addslashes($user['email']);
                $hashUser   = $this->createHash(addslashes($dataHash), 'hash');

                $userEntity = new userEntity();

                $userEntity->setFirstname(addslashes($user["firstname"]));
                $userEntity->setLastname(addslashes($user["lastname"]));
                $userEntity->setEmail(addslashes($user["email"]));
                $userEntity->setUsername(addslashes($user["username"]));
                $userEntity->setPassword($securePass);
                $userEntity->setTwoFactor(addslashes($user["twoFactor"]));   
                $userEntity->setHash($hashUser);            

                var_dump($userEntity);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        private function createHash(String $data, String $type) 
        {
            try {
                $custo = '12';
                $salt = 'Cf1f11ePArKlBJomM0F6aJ';
            
                if($type === "password")
                    $hash = crypt($data, '$2a$' . $custo . '$' . $salt . '$');
                else 
                    $hash = crypt($data, '$2a$' . $custo . '$' . $salt . '$');

                return $hash;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }