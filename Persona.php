<?php
    class Persona{
    private $nome,$cognome;
    public function __construct($nome,$cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function GetNome(){
        return $this->nome;
    }
    public function GetCognome(){
        return $this->cognome;
    }

    public function SetNome($nome){
        $this->nome = $nome;
    }
    public function SetCognome($cognome){
        $this->cognome = $cognome;
    }
    public function Presentati(){
        return "Nome: " . $this->nome . "<br>Cognome: " . $this->cognome;
    }
}