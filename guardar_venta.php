
<?php
include_once "funciones.php";
//Llama a la función 'agregarVenta' para agregar una nueva venta con los datos proporcionados por el formulario POST.
$ok = agregarVenta($_POST["id_cliente"], $_POST["monto"], $_POST["fecha"]);
if ($ok) {
    header("Location: ventas.php");
} else {
    echo "Error guardando venta";
}
?>
