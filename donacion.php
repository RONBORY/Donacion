<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>donacion</title>
</head>
<body style="background-color: rebeccapurple; text-align:center; border:4px solid red">
    <h1>donacion</h1>
    <form action="" method="POST">
        <label for="monto">Monto donacion:</label>
        <input type="number" id="monto" name="monto" step="0.01" min="0" required><br><br>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <label for="id_proyecto">ID del Proyecto:</label>
        <input type="number" id="id_proyecto" name="id_proyecto" required><br><br>

        <label for="id_donante">ID del Donante:</label>
        <input type="number" id="id_donante" name="id_donante" required><br><br>

        <input type="submit" name="Agregar" value="Agregar">
    </form>
</body>
</html>

<?php

$conn=mysqli_connect("localhost", "root", "", "organizacion");

if(isset($_POST["Agregar"])){
    $monto= $_POST['monto'];
    $fecha= $_POST['fecha'];
    $id_proyecto = $_POST['id_proyecto'];
    $id_donante = $_POST['id_donante'];

    $query = "INSERT INTO donacion (monto, fecha, id_proyecto, id_donante) VALUES ('$monto', '$fecha', '$id_proyecto', '$id_donante')";

    if (mysqli_query($conn, $query)){
        echo "La donación se ha agregado correctamente.";
    } else {
        echo "donación no agregada: " . mysqli_error($conn);
    }
}


?>