<?php
//Incluye el archivo funciones.php que contiene las funciones necesarias para interactuar con la base de datos.
include_once "funciones.php";

//Llama a la función 'actualizarCliente' con los datos recibidos por el método POST, 

$ok = actualizarCliente($_POST["nombre"], $_POST["edad"], $_POST["departamento"], $_POST["id"]);

// Verifica si la actualización se realizó correctamente o no.
if (!$ok) {
    //Si ocurrió un error durante la actualización, muestra un mensaje de error.
    echo "Error actualizando.";
} else {
    //Si la actualización se realizó correctamente, redirige al usuario a la página de clientes.
    header("Location: clientes.php");
}
?>
