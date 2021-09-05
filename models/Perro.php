<?php

    require_once 'Animal.php';
    require_once 'Objeto.php';

    class Perro extends Animal implements Objeto {

        // attributes
        private $tipoSangre;
 
     // metodo magico
        function __construct($idAnimal, $nombre,$color,$edad,$peso,$tamanio,$sonido, $tipoSangre) {

            parent::__construct($idAnimal, $nombre,$color,$edad,$peso,$tamanio,$sonido);
            $this->tipoSangre = $tipoSangre;
        }
 
        // destructor (metodo magico)
        function __destruct(){}
 
        // Metodo tradicionales de clase
        function getTipoSangre() {
            return $this->tipoSangre;
        }
        function getTienePulgas()
        {
            echo '<h1>Tiene pulgas'.'</h1>';
        }
        function getJuega()
        {
            echo '<h1>Juega'.'</h1>';
        }
    }

?>