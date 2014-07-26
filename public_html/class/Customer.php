<?php

class Customer {

    public $nome;
    public $email;
    public $cpf;
    public $city;
    public $uf;
    public $gender;
    
    public function __construct($nome,$email,$cpf,$city,$uf,$gender) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;        
        $this->city = $city;
        $this->uf = $uf;
        $this->gender = $gender;
        
    }
    
    /* Getters */
 
    public function getNome() {
        return $this->nome;
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
