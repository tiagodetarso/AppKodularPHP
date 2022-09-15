<?php
$_REQUEST['codigo'];

$servername = "---.---.---.---";
$username = "xxxxxxxxx";
$password = "xxxxxxxxxx";
$dbname = "bp2app";

$conn = new mysqli ($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
$sqlbusca1 = "SELECT valor_max_compra FROM negocios WHERE codigo = '$codigo'";
$sqlbusca2 = "SELECT valor_min_venda FROM negocios WHERE codigo = '$codigo'";
$result1 = $conn->query($sqlbusca1);
$result2 = $conn->query($sqlbusca2);

if ($result1->num_rows > 0) {
	while($row = $result1->fetch_assoc()) { 
		if ($row['valor_max_compra'] ==''){
			$valor_compra = -1;
		}else{
			echo $result1;
			$valor_compra = floatval($row['valor_max_compra']);
			}
		}
}else{
	$valor_compra = -1;
}

if ($result2->num_rows > 0) {
	while($row = $result2->fetch_assoc()) { 
        if ($row['valor_min_venda'] ==''){
			$valor_venda = -1;
		}else{
			echo $result2;
			$valor_venda = floatval($row['valor_min_venda']);
			}
		} 
}else{
	$valor_venda = -1;
}

if (($valor_venda == -1) or ($valor_compra == -1)){
	echo "Um dos dois negociantes ainda não inseriu o valor. Tente novamente em alguns instantes.";
}else{
	if ($valor_compra < $valor_venda){
		echo "Não há consenso, pois o valor máximo de compra é menor que o valor mínimo de venda.";
	}else{
		$valor_ideal = ($valor_compra + $valor_venda)/2;
		echo "O valor ideal para esta negociação é de: R$ ".$valor_ideal;
		}
	}

$conn->close();
?>
