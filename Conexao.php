<?php

$host = "localhost";
$bancodedados = "cliente";
$user = "root";
$password = "@Suellen08112005";

$mysqli = new mysqli($host, $user, $password, $bancodedados);

if ($mysqli->connect_errno) {
    echo "Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

} else {
    echo "Conexão realizada com sucesso!";
}

?>