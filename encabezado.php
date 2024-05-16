
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CRM">
    <title>CRM</title>
    <!-- Cargamos Bootstrap-->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/Chart.min.js"></script>
    <!-- Cargamos mis estilos css-->
    <link href="estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
    .nav-link{
        font-size: 18px;
    }
    </style>
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
        <a class="navbar-brand" href="/crm-php-mysql-main/crm-php-mysql-main/dashboard.php">SEONICTECH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miNavbar" aria-controls="miNavbar" aria-expanded="false" aria-label="Mostrar u ocultar menú">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="miNavbar" style="margin-left: 40px;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link" href="clientes.php"><span class="mdi mdi-account-multiple"></span> Clientes</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link" href="ventas.php"><span class="mdi mdi-store"></span> Ventas</a>
                </li>
                <li class="nav-item" style="margin-right: 10px">
                    <a class="nav-link" href="dashboard.php"><span class="mdi mdi-desktop-mac-dashboard"></span> Dashboard</a>
                </li>
        
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="https://www.linkedin.com/in/ricardo-n%C3%BA%C3%B1ez-mu%C3%B1iz/"><span class="mdi mdi-handshake-outline"></span>Ayuda y soporte</a>
                </li>
            </ul>
        </div>
    </nav>
    <main role="main" class="container-fluid">