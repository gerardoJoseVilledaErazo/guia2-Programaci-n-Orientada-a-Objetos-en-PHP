<?php

    require_once '../models/Gato.php';

    if(isset($_POST)) {

        $idAnimal = $_POST['idAnimal'];
        $nombre = $_POST['nombre'];
        $color = $_POST['color'];
        $edad = $_POST['edad'];
        $peso = $_POST['peso'];
        $tamanio = $_POST['tamanio'];
        $sonido = $_POST['sonido'];

        $tipoSangre = $_POST['tipoSangre']; 

        // CREANDO INSTANCIA DE CLASE
        $Animal = new Gato($idAnimal, $nombre,$color,$edad,$peso,$tamanio,$sonido, $tipoSangre);

        echo '<h1>ID Animal: </h1>'.$Animal->getIdAnimal();
        echo '<h1>Nombre: </h1>'.$Animal->getNombre();
        echo '<h1>Color: </h1>'.$Animal->getColor();
        echo '<h1>Edad: </h1>'.$Animal->getEdad();
        echo '<h1>Peso: </h1>'.$Animal->getPeso();
        echo '<h1>Tamaño: </h1>'.$Animal->getTamanio();
        echo '<h1>Sonido: </h1>'.$Animal->getSonido();

        echo '<h1>Tipo de sangre: </h1>'.$Animal->getTipoSangre();
        echo '<br>';
        $Animal->getTienePulgas();
        echo '<br>';
        $Animal->getJuega();
        echo '<br>';
        echo '<a class="nav-link" href="http://localhost:8080/guia_2/">Home</a>';

        $Animal->getTipoSangre();
    }
?>