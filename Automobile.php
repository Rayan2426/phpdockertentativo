<?php

class Automobile extends Veicolo{
    private $modello;

    public function __construct($marca,$targa,$modello){
        parent::__construct($marca,$targa);
        $this->modello = $modello;
    }

    public function GetModello(){
        return $this->modello;
    }

    public function SetModello($modello){
        $this->modello = $modello;
    }
}

?>