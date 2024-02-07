<?php
    class Animale{
    private $verso;

    public function __construct($verso){
        $this->verso = $verso;
    }

    public function GetVerso(){
        return $this->verso;
    }

    public function SetVerso($verso){
        $this->verso = $verso;
    }
}