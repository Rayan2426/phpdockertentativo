<?php
    class Studente extends Persona{
        private $matricola;

        function __construct($nome,$cognome,$matricola){
            parent::__construct($nome,$cognome);
            $this->matricola = $matricola;
        }

        function Presentati(){
            return parent::Presentati() . "<br>Matricola: " . $this->matricola;
        }
    }
?>