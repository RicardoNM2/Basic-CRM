
<?php
include_once "funciones.php";
//Llama a la función 'agregarCliente' para agregar un nuevo cliente con los datos proporcionados por el formulario POST.
$ok = agregarCliente($_POST["nombre"], $_POST["edad"], $_POST["departamento"]);
if (!$ok) {
    echo "Error registrando.";
} else {
    header("Location: clientes.php");
}
