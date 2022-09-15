<?php
$codigo = $_REQUEST['codigo'];
$nome = $_REQUEST['nome'];

$servername = "---.---.---.---";
$username = "xxxxxxxxx";
$password = "xxxxxxxxxx";
$dbname = "bp2app";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

$sql1 = "UPDATE negocios SET nome_comprador = '$nome' WHERE codigo = '$codigo'";
$conn->query($sql);

$conn->close();
?>
