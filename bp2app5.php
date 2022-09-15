
<?php
$codigo = $_REQUEST['codigo'];

$servername = "---.---.---.---";
$username = "xxxxxxxxx";
$password = "xxxxxxxxxx";
$dbname = "bp2app";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
$sqlbusca = "SELECT objeto FROM negocios WHERE codigo = '$codigo'";
$result = $conn->query($sqlbusca);
	
//echo "<h1>'$result'<h1>";

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) { 
	  echo $row['objeto'];     
	}
	} else {
	  echo "Não há dados";
}

$conn->close();
?>
