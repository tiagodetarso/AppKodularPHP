<?php
$codigo = "CT09873"; // $_REQUEST['codigo'];
$nome = "Tiago"; // $_REQUEST['nome'];
$objeto = "Notebook"; // $_REQUEST['objeto'];

$servername = "193.123.127.132";
$username = "root";
$password = "raggio83";
$dbname = "bp2app";

$conn = new mysqli ($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

$sql = "INSERT INTO negocios (id, codigo, nome_comprador, objeto) VALUES (0, '$codigo', '$nome', '$objeto')";
$conn->query($sql);

$conn->close();
?>