<?php
include_once "funciones.php";
//Llama a la función elimitarCliente para eliminar al cliente correspondiente al ID 
$ok = eliminarCliente($_GET["id"]);
//Verifica si la eliminación se realizó correctamente
if (!$ok) {
    //Muestro mensaje de error
    echo "Error eliminando";
} else {
    //Si la eliminación se realizó correctamente, redirige al usuario a la página de clientes.
    header("Location: clientes.php");
}
?>
