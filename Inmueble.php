<?php 
/* 
En la clase Inmueble:
✔ Se registra la siguiente información: código de referencia, el número de piso en el que se encuentra dentro del edificio,
el tipo de inmueble (local comercial o departamento), costo mensual y una referencia a una instancia de la clase
Persona si se encuentra alquilado.
✔ Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase.
✔ Los métodos de acceso de cada uno de los atributos de la clase.
✔ Redefinir el método toString para que retorne la información de los atributos de la clase.
✔ Implementar el método alquilarInmueble(objPersona) el cual recibe por parámetro la referencia al nuevo inquilino
del inmueble. Tener en cuenta que un inmueble solo puede ser alquilado si no se encuentra alquilado en ese momento */

class Inmueble{
    private $codReferencia;
    private $nroPiso;
    private $tipInmueble;
    private $costoMensual;
    private $objPersona;

    public function __construct($referencia,$numeroPiso,$tipoInmueble,$valorMensual,$inquilino){
        $this->codReferencia = $referencia;
        $this->nroPiso = $numeroPiso;
        $this->tipInmueble = $tipoInmueble;
        $this->costoMensual = $valorMensual;
        $this->objPersona = $inquilino;
        
    }

    

    public function getCodReferencia(){
        return $this->codReferencia;
    }

    public function setCodReferencia($referencia){
        $this->codReferencia = $referencia;
    }

    public function getNroPiso(){
        return $this->nroPiso;
    }

    public function setNroPiso($numeroPiso){
        $this->nroPiso = $numeroPiso;
    }

    public function getTipInmueble(){
        return $this->tipInmueble;
    }

    public function setTipInmueble($tipoInmueble){
        $this->tipInmueble = $tipoInmueble;
    }

    public function getCostoMensual(){
        return $this->costoMensual;
    }

    public function setCostoMensual($valorMensual){
        $this->costoMensual = $valorMensual;
    }

    public function getObjPersona(){
        return $this->objPersona;
    }

    public function setObjPersona($inquilino){
        $this->objPersona = $inquilino;
    }

    public function __toString(){
        $info=" 
        CODIGO DE REFERENCIA: {$this->getCodReferencia()}
        NUMERO DE PISO: {$this->getNroPiso()}
        TIPO DE INMUEBLE: {$this->getTipInmueble()}
        COSTO MENSUAL: {$this->getCostoMensual()}
        INQUILINO:  {$this->getObjPersona()}
        ";
        return $info;
        
    }
}