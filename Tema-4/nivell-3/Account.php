<?php 
class Account{
    //Atributs
    public $numCompte;
    public $nomClient;
    public $cognomClient;
    public $saldo;

    //Constructor
    public function __construct($numCompte, $nomClient, $cognomClient, $saldo){
        $this->numCompte = $numCompte;
        $this->nomClient = $nomClient;
        $this->cognomClient = $cognomClient;
        $this->saldo = $saldo;
    }
    //Getters
    public function getNumCompte(){
        return $this->numCompte;
    }
    public function getNomClient(){
        return $this->nomClient;
    }
    public function getCognomClient(){
        return $this->cognomClient;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    //Setter
    public function setNumCompte($numCompte){
        $this->numCompte = $numCompte;
    }
    public function setNomClient($nomClient){
        $this->nomClient = $nomClient;
    }
    public function setCognomClient($cognomClient){
        $this->cognomClient = $cognomClient;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    //Metodes
    public function deposit($amount){
        $this->setSaldo($this->getSaldo() + $amount);
    }
    public function withdraw($amount){
        if ($amount <= $this->getSaldo()){
            $this->setSaldo($this->getSaldo() - $amount);
        } else{
            echo "Error";
        }
    }
}
