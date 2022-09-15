<?php
$codigo = $_REQUEST['codigo'];
$valor = $_REQUEST['valor_min_venda'];

$servername = "---.---.---.---";
$username = "xxxxxxxxx";
$password = "xxxxxxxxxx";
$dbname = "bp2app";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
$sql1 = "UPDATE negocios SET valor_min_venda = '$valor' WHERE codigo = '$codigo'";
$conn->query($sql1);

$sqlbusca = "SELECT objeto FROM negocios WHERE codigo = '$codigo'";
$result = $conn->query($sqlbusca);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) { 
	    echo $row['objeto'];     
	}
}

$conn->close();
?>
