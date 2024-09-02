<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Donación</title>
</head>
<body>
    <h1>Formulario de Donación</h1>
    <form action="" method="POST">
        <label for="monto">Monto de la donación:</label>
        <input type="number" id="monto" name="monto" step="0.01" min="0" required><br><br>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <label for="id_proyecto">ID del Proyecto:</label>
        <input type="number" id="id_proyecto" name="id_proyecto" required><br><br>

        <label for="id_donante">ID del Donante:</label>
        <input type="number" id="id_donante" name="id_donante" required><br><br>

        <input type="submit" name="Agregar" value="Agregar">
    </form>

    <?php
    // Conectar a la base de datos
    $conn = mysqli_connect("localhost", "root", "", "organizacion");

    // Verificar la conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Procesar el formulario
    if (isset($_POST["Agregar"])) {
        $monto = $_POST['monto'];
        $fecha = $_POST['fecha'];
        $id_proyecto = $_POST['id_proyecto'];
        $id_donante = $_POST['id_donante'];

        // Consulta SQL para insertar datos
        $query = "INSERT INTO donacion (monto, fecha, id_proyecto, id_donante) VALUES ('$monto', '$fecha', '$id_proyecto', '$id_donante')";

        // Ejecutar la consulta
        if (mysqli_query($conn, $query)) {
            echo "<p>La donación se ha agregado correctamente.</p>";
        } else {
            echo "<p>Donación no agregada: " . mysqli_error($conn) . "</p>";
        }
    }

    // Cerrar la conexión
    mysqli_close($conn);
    ?>
</body>
</html>
