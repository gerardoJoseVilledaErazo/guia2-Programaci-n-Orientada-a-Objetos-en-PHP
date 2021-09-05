<?php

   abstract class Animal {

     // attributes
     protected $idAnimal;
     protected $nombre;
     protected $color;
     protected $edad;
     protected $peso;
     protected $tamanio;
     protected $sonido;
 
     // metodo magico
     function __construct($idAnimal, $nombre,$color,$edad,$peso,$tamanio,$sonido){
 
        $this->idAnimal = $idAnimal;
         $this->nombre = $nombre;
         $this->color = $color;
          $this->edad = $edad;
          $this->peso = $peso;
          $this->tamanio = $tamanio;
           $this->sonido = $sonido;
     }
 
     // destructor (metodo magico)
     function __destruct(){}
 
     // Metodo tradicionales de clase 
     function getIdAnimal() {
        return $this->idAnimal;
    }
     function getNombre() {
         return $this->nombre;
     }
     function getColor(){
         return $this->color;
     }
     function getEdad(){
         return $this->edad;
     }
     function getPeso(){
         return $this->peso;
     }
     function getTamanio(){
         return $this->tamanio;
     }
     function getSonido(){
         return $this->sonido;
     }

   }

?>