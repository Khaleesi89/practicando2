<?php

class Persona{
    private $tipoDni;
    private $nroDni;
    private $nombre;
    private $apellido;
    private $telefono;


    public function __construct($tipDoc,$nroDoc,$name,$surname,$phone){
        $this->tipoDni = $tipDoc;
        $this->nroDni = $nroDoc;
        $this->nombre = $name;
        $this->apellido = $surname;
        $this->telefono = $phone;        
    }

    

    public function getTipoDni(){
        return $this->tipoDni;
    }

    public function setTipoDni($tipDoc){
        $this->tipoDni = $tipDoc;
    }

    public function getNroDni(){
        return $this->nroDni;
    }

    public function setNroDni($nroDoc){
        $this->nroDni = $nroDoc;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($name){
        $this->nombre = $name;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($surname){
        $this->apellido = $surname;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($phone){
        $this->telefono = $phone;
    }

    public function __toString(){
        $info = "
        NOMBRE: {$this->getNombre()}
        APELLIDO: {$this->getApellido()}
        TIPO DOCUMENTO: {$this->getTipoDni()}
        NUMERO DOCUMENTO: {$this->getNroDni()}
        TELEFONO: {$this->getTelefono()}
        ";
        
    }

}