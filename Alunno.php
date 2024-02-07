<?php
class Alunno{
    private $nome,$cognome, $eta;
    public function __construct($nome,$cognome,$eta){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function GetNome(){
        return $this->nome;
    }
    public function GetCognome(){
        return $this->cognome;
    }

    public function GetEta(){
        return $this->eta;
    }

    public function SetNome($nome){
        $this->nome = $nome;
    }
    public function SetCognome($cognome){
        $this->cognome = $cognome;
    }

    public function SetEta($eta){
        $this->eta = $eta;
    }

    public function GetAll(){
        return "Nome: " . $this->nome . "<br>Cognome: " . $this->cognome . "<br>Eta: " . $this->eta;
    }
}
?>