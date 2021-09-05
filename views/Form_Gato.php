<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Gato</title>
</head>
<body>
    <form action="../controllers/GatoController.php" method="POST">
        <label>Id Animal: </label><input type="text" name="idAnimal" required /><br><br>
        <label>Nombre: </label><input type="text" name="nombre" required /><br><br>
        <label>Color: </label><input type="text" name="color" required /><br><br>
        <label>Edad: </label><input type="number" name="edad" required /><br><br>
        <label>Peso: </label><input type="number" name="peso" required /><br><br>
        <label>Tamaño: </label><input type="text" name="tamanio" required /><br><br>
        <label>Sonido: </label><input type="text" name="sonido" required /><br><br>
        
        <label>Tipo de sangre: </label><input type="text" name="tipoSangre" required /><br><br>

        <input type="submit" value = "Enviar" />
    </form>
</body>
</html>