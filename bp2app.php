<?php
$codigo = $_REQUEST['codigo'];
$nome = $_REQUEST['nome'];
$objeto = $_REQUEST['objeto'];

$servername = "---.---.---.---";
$username = "xxxxxxxxx";
$password = "xxxxxxxxxx";
$dbname = "bp2app";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

$sql = "INSERT INTO negocios (id, codigo, nome_comprador, objeto) VALUES (0, '$codigo', '$nome', '$objeto')";
$conn->query($sql);

$conn->close();
?>
