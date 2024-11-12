<?php
$con = mysqli_connect("localhost","root","","bd_empresa");
if (!$con) {
    die("Erro ao se conectar a base de dados");
}

mysqli_query($con, "SET NAMES utf8");
