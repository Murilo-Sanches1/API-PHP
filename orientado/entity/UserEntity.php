<?php

    class UserEntity 
    {
        private $id;
        private $firstname;
        private $lastname;
        private $email;
        private $username;
        private $password;
        private $hash;
        private $twoFactor;
        private $avatar;
        private $bio;

        public function getId() 
        {
            return $this->id;
        }

        public function setId(Int $id)
        {
            $this->id = $id;
        }

        public function getFirstname() 
        {
            return $this->firstname;
        }

        public function setFirstname(String $firstname) 
        {
            $this->firstname = $firstname;
        }

        public function getLastname() {
            return $this->lastname;
        }

        public function setLastname(String $lastname) 
        {
            $this->lastname = $lastname;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail(String $email) 
        {
            $this->email = $email;
        }

        public function getUsername() {
            return $this->username;
        }

        public function setUsername(String $username) 
        {
            $this->username = $username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword(String $password) 
        {
            $this->password = $password;
        }
        
        public function getHash() 
        {
            return $this->hash;
        }

        public function setHash(String $hash) 
        {
            $this->hash = $hash;
        }

        public function getTwoFactor() {
            return $this->twoFactor;
        }

        public function setTwoFactor(Int $twoFactor) 
        {
            $this->twoFactor = $twoFactor;
        }

        public function getAvatar() 
        {
            return $this->avatar;
        }

        public function setAvatar(String $avatar) 
        {
            $this->avatar = $avatar;
        }

        public function getBio() 
        {
            return $this->bio;
        }

        public function setBio(String $bio) 
        {
            $this->bio = $bio;
        }
    }