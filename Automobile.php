<?php

class Automobile extends Veicolo{
    private $modello;

    function __constructor($marca,$targa,$modello){
        parent::__constructor($marca,$targa);
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