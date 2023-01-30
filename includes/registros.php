<?php
if (isset($_POST)) {

    //Iniciar la sesion y la conexion a bd
    require_once 'conexion.php';

    // Recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    $password = isset($_POST['pass']) ? mysqli_real_escape_string($db, trim($_POST['pass'])) : false;
    $passrepeat = isset($_POST['passrepeat']) ? mysqli_real_escape_string($db, trim($_POST['passrepeat'])) : false;
    $fechaNacimiento = isset($_POST['fechaNacimiento']) ? mysqli_real_escape_string($db, trim($_POST['fechaNacimiento'])) : false;

    //Array de errores
    $errores = array();


    //Validar los datos antes de guardarlos
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    // Validar Apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }
    // Validar Email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }
    // Validar Contraseña
    if (!empty($password)) {
        $pass_validado = true;
    } else {
        $pass_validado = false;
        $errores['pass'] = "La contraseña esta vacia";
    }

    // Validar repeatpass
    if (!empty($passrepeat)) {
        // Comparar contraseñas
        if ($passrepeat == $password) {
            $pass_coincide = true;
        } else {
            $pass_coincide = false;
            $errores['passrepeat'] = "La contraseña no coincide";
        }
        $passrepeat_validado = true;
    } else {
        $passrepeat_validado = false;
        $errores['passrepeat'] = "La contraseña esta vacia";
    }

    $guardar_usuario = false;

    if (count($errores) == 0) {
        $guardar_usuario = true;

        // Cifrar la contraseña
        $pass_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 5]);

        // INSERTAR CLIENTE EN LA BBDD
        $sql = "INSERT INTO clientes VALUES(null, '$nombre', '$apellidos', '$email', '$pass_segura', '$fechaNacimiento', CURDATE());";

        $guardar = mysqli_query($db, $sql);

        if ($guardar) {
            $_SESSION['completado'] = 'El registro se ha completado';

            $sql = "SELECT * FROM clientes WHERE email = '$email';";
            $login = mysqli_query($db, $sql);
            if ($login && mysqli_num_rows($login) == 1) {
                $usuario = mysqli_fetch_assoc($login);
                $_SESSION['usuario'] = $usuario;
            }
        } else {
            $_SESSION['errores']['general'] = 'Fallo al guardar el usuario';
        }
    } else {
        $_SESSION['errores'] = $errores;
    }
}
header('Location: ../Inicio.php');
