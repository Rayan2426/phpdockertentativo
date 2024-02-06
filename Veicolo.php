<?php
class Veicolo{
    private $marca, $targa;
    public function __construct($marca,$targa){
        $this->marca = $marca;
        $this->targa = $targa;
    }

    public function GetMarca(){
        return $this->marca;
    }

    public function GetTarga(){
        return $this->targa;
    }

    public function SetMarca($marca){
        $this->marca = $marca;
    }

    public function SetTarga($targa){
        $this->targa = $targa;
    }

    public function GetAll(){
        return "Marca: " . $this->marca . "<br>Targa: " . $this->targa;
    }
}
?>