<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = $_POST["cliente"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    if (empty($cliente) || empty($direccion) || empty($correo) || empty($producto) || empty($cantidad) || empty($precio)) {
        echo "Todos los campos son obligatorios.";
    } else {
        $conexion = new mysqli("svc-mysql", "root", "mmb1932&", "facturas");
        if ($conexion->connect_error) {
            die("Error al conectar a la base de datos: " . $conexion->connect_error);
        }
        $sql = "INSERT INTO facturas (cliente, direccion, correo, producto, cantidad, precio) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ssssdi", $cliente, $direccion, $correo, $producto, $cantidad, $precio);
        if ($stmt->execute()) {
            echo "Factura guardada correctamente.";
        } else {
            echo "Error al guardar la factura: " . $conexion->error;
        }
        $stmt->close();
        $conexion->close();
    }
} else {
    header("Location: index.html");
    exit();
}
echo '<br><a href="index.html">Volver a la página principal</a>';
?>