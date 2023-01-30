<?php

$server = 'localhost';
$username = 'id20226059_admin';
$password = '#nxaV+TAajD*[4J^';
$database = 'id20226059_projects';
$db = mysqli_connect($server, $username, $password, $database);

// INICIAR LA SESSION

if (!isset($_SESSION)) {
    session_start();
}