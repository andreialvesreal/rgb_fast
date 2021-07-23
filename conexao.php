<?php
//dados para conexão com o banco//
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "rgb_images";

//conexão com o banco//
$con = mysqli_connect($host, $usuario, $senha);
$banco = mysqli_select_db($con, $bd);


//Mensagem de erro://
if (mysqli_connect_errno()) {
    die("Falha de conexão com o banco de dados: " . mysqli_connect_error() . " ( " . mysqli_connect_errno() . ")");
}


