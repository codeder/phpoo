<?php

class Customer {

    public $name;
    public $email;
    public $cpf;
    public $city;
    public $uf;
    public $gender;
    
    public function __construct($name,$email,$cpf,$city,$uf,$gender) {
        $this->name = $name;
        $this->email = $email;
        $this->cpf = $cpf;        
        $this->city = $city;
        $this->uf = $uf;
        $this->gender = $gender;
        
    }
    
    /* Getters */ 
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getCity() {
        return $this->city;
    }

    public function getUf() {
        return $this->uf;
    }

    public function getGender() {
        return $this->gender;
    }        

}
