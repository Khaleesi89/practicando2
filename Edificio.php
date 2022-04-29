<?php

/* 

✔ Implementar el método darInmueblesDisponiblesParaAlquiler(unTipoInmueble,costoMensual) método que retorna
una colección de todos los departamentos del tipo recibido por parámetro (unTipoInmueble) que se encuentran
disponibles para ser alquilados y cuyo costo mensual no supera el valor recibido en el parámetro costoMensual.
✔ Implementar el método registrarAlquilerInmueble(objInmueble, objPersona) que recibe por parámetro una referencia
al inmueble que se desea alquilar y la referencia a la persona que se desea alquilar. Tener en cuenta que solo
se va a poder realizar el alquiler de dicho inmueble si verifica la política de alquiler de la empresa. El método debe
retornar verdadero en caso de poder registrar el alquiler o falso en caso contrario.
✔ Implementar el método calculaCostoEdificio() método que retorna el valor correspondiente a la suma de los costos
de cada uno de los inmuebles que se encuentran alquilados. */

class Edificio{
    private $direccion;
    private $coleccDeptos = [];
    private $objAdministrador;

    public function __construct($address,$arrayDeptos,$objResponsable){
        $this->direccion = $address;
        $this->coleccDeptos = $arrayDeptos;
        $this->objAdministrador = $objResponsable;        
    }

    

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($address){
        $this->direccion = $address;
    }

    public function getColeccDeptos(){
        return $this->coleccDeptos;
    }

    public function setColeccDeptos($arrayDeptos){
        $this->coleccDeptos = $arrayDeptos;
    }

    public function getObjAdministrador(){
        return $this->objAdministrador;
    }

    public function setObjAdministrador($objResponsable){
        $this->objAdministrador = $objResponsable;
    }

    public function __toString(){
        $info = "
        DIRECCION: {$this->getDireccion()}
        COLECCION DE DEPARTAMENTOS: {$this-> getColeccDeptos()}
        ADMINISTRADOR: {$this->getObjAdministrador()}
        ";
        return $info;
        
    }

    public function darInmueblesDisponiblesParaAlquiler($unTipoInmueble,$costoMensual){

    }
}