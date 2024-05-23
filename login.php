<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí debes agregar la lógica para verificar las credenciales, por ejemplo, consultando una base de datos
    // Por simplicidad, se usará un usuario y contraseña hardcoded
    $valid_username = "admin";
    $valid_password = "1234";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['user_logged_in'] = true;
        header('Location: dashboard.php'); // Redirigir al usuario a la página principal
        exit;
    } else {
        header('Location: login.php?error=1'); // Redirigir al login con un mensaje de error
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Login</h4>
                        <?php
                        if (isset($_GET['error'])) {
                            echo '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos.</div>';
                        }
                        ?>
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="username">Usuario</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
