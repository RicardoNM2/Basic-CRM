<?php
    include_once "encabezado.php";
    include_once "funciones.php";
    $departamentos = obtenerDepartamentos();
?>

<style>
    .row {
        margin-top: 15px;
        margin-left: 5px;
    }
</style>

    <div class="row">
        <div class="col-12">
            <h1>Agregar cliente</h1>
            <form action="guardar_cliente.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input required type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" pattern="^[a-z-ñÑ]*$">
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <!--Edad minimo de 18 años-->
                    <input required type="number" class="form-control" name="edad" id="edad" placeholder="Edad" min="18">
                </div>
                <div class="form-group">
                    <label for="departamento">Departamento</label>
                    <select class="form-control" name="departamento" id="departamento">
                        <?php foreach ($departamentos as $departamento) { ?>
                            <option value="<?php echo $departamento ?>"><?php echo $departamento ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
<?php include_once "pie.php" ?>