<?php include_once 'conexion.php' ?>
<!DOCTYPE html>
<html lang="es">
<?php $archivoActual =  basename($_SERVER['PHP_SELF']); ?>

<head>
    <link rel="shortcut icon" href="logo2.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Santorini Resort - <?= $archivoActual ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/custom.css?20202">
</head>

<body>

    <!-- HEADER -->

    <header>
        <!--  NAVEGACIÓN  -->

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="Inicio.php">
                <img src="img/logo.png " class="logo" alt="logo">
            </a>
            <button type="button" class="navbar-toggler barra" data-toggle="collapse" data-target=#navbarCollapse>
                <span class="navbar-toggler-icon barra"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <?php if (isset($_SESSION['usuario'])) : ?>
                    <img src='img/perfil.png' class='perfil-sm d-sm-block d-lg-none mt-3' />
                <?php else : ?>
                    <div class="row d-lg-none">
                        <div class="col-8 col-sm-7 mx-auto">
                            <a href="sesion.php" class="btn btn-estilo w-100 inic mt-3">Iniciar Sesion</a>
                        </div>
                        <div class="col-8 col-sm-7 mx-auto">
                            <a href="registro.php" class="btn btn-estilo w-100 mt-3">Registrarse</a>
                        </div>
                    </div>
                <?php endif; ?>

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?= ($archivoActual == 'Inicio.php') ? 'active' : '' ?>">
                        <a href="Inicio.php" class="nav-link mt-1">Inicio</a>
                    </li>
                    <li class="nav-item dropdown <?= ($archivoActual == 'Habitaciones.php') ? 'active' : '' ?>">
                        <a class="nav-link dropdown-toggle mt-1" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Habitaciones
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Habitaciones.php#honey">Honeymoon Suite</a>
                            <a class="dropdown-item" href="Habitaciones.php#estandar">Habitación Estándar</a>
                            <a class="dropdown-item" href="Habitaciones.php#familiar">Habitación Familiar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Habitaciones.php#tabla">Comodidades y Servicios</a>
                        </div>
                    </li>
                    <li class="nav-item <?= ($archivoActual == 'Galeria.php') ? 'active' : '' ?>">
                        <a href="Galeria.php" class="nav-link mt-1">Galería</a>
                    </li>
                    <li class="nav-item <?= ($archivoActual == 'Ofertas.php') ? 'active' : '' ?>">
                        <a href="Ofertas.php" class="nav-link mt-1">Ofertas</a>
                    </li>
                    <li class="nav-item <?= ($archivoActual == 'Contacto.php') ? 'active' : '' ?>">
                        <a href="Contacto.php" class="nav-link mt-1">Contacto</a>
                    </li>
                </ul>
            </div>
            <?php if (isset($_SESSION['usuario'])) : ?>
                <div class="btn-group d-none d-lg-block">
                    <img src='img/perfil.png' class='perfil dropdown-toggle' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Mi perfil</a>
                        <a class="dropdown-item" href="#">Mis Reservas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="includes/cerrar.php">Cerrar sesión</a>
                    </div>
                </div>
            <?php else : ?>
                <a href="sesion.php" class="btn btn-estilo inic mt-1 d-none d-lg-block">Iniciar Sesion</a>
                <a href="registro.php" class="btn btn-estilo mt-1 d-none d-lg-block">Registrarse</a>
                </div>
            <?php endif; ?>
        </nav>