<?php
//Iniciar la sesion y la conexion a bd
require_once 'conexion.php';

if (isset($_POST)) {

    if (isset($_SESSION['error_login'])) {
        $_SESSION['error_login'] = null;
    }

    $email = trim($_POST['email']);
    $pass = $_POST['pass'];

    //Consulta para probar credenciales
    $sql = "SELECT * FROM clientes WHERE email = '$email';";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        // Comprobar la contraseña
        $verify = password_verify($pass, $usuario['pass']);

        if ($verify) {
            // Utilizar una sesion para guardar los datos del usuario
            $_SESSION['usuario'] = $usuario;
        } else {
            // Si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = 'pass no coincide';
        }
    } else {
        // Mensaje de error
        $_SESSION['error_login'] = 'Login incorrecto email no existe';
    }
}

// Redirigir al Inicio
header("Location: ../Inicio.php");
