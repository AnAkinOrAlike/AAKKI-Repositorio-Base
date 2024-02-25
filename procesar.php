<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = array(
        "nombre" => $_POST["nombre"],
        "apellido" => $_POST["apellido"],
        "correo" => $_POST["correo"],
        "telefono" => $_POST["telefono"]
    );

    echo "<h2>Datos Ingresados:</h2>";
    echo "<p>Nombre: " . $datos["nombre"] . "</p>";
    echo "<p>Apellido: " . $datos["apellido"] . "</p>";
    echo "<p>Correo Electrónico: " . $datos["correo"] . "</p>";
    echo "<p>Número de Teléfono: " . $datos["telefono"] . "</p>";
} else {
    header("Location: formulario.html");
    exit;
}
?>