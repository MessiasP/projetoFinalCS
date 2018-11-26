<?php

$mysqli = new mysqli('localhost','root','','aula3_clientserver');

// if (!$mysqli) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// mysqli_close($mysqli);

$op = $_GET["op"];

switch ($op) {
	case "create":
	echo ("create");
	create($mysqli, $_GET["nome"], $_GET["estoque"], $_GET["preco"]);
	break;
	case "list":
		echo ("list");
        listar($mysqli);
        break;
	case "filterCode":
		echo ("filterCode");
        getByCode($mysqli, $_GET["code"]);
        break;
	case "reajuste":
	echo ("reajuste");
	reajuste($mysqli, $_GET["x"],$_GET["y"],$_GET["z"]);
		break;
		default:
		echo "Operacao invalida";
		break;
	}
	
	function create($mysqli, $nome, $estoque, $preco) {
		$query = "INSERT INTO produto (nome, estoque, preco) values ('".$nome."', '".$estoque."', '".$preco."')";
		$result = $mysqli -> query($query);
		echo ("Service, chegou aqui!!");
		echo json_encode($result);
	}

// function reajuste($mysqli, $nome){

	// $query = " insert into produto (produto_id, nome, estoque, preco) values nome>=".$nome." and estoque<=".$estoque "and preco<=".$preco;
	// 	$result = $mysqli->query($query);
	
	// 	$dbdata = array();
		
	// 	while( $row = $result->fetch_assoc()) {
	// 		$dbdata[]=$row;
	// 	}
	// 	echo json_encode($dbdata);
	// $query2 = "update produto set preco = preco*1.".$z." where preco>=".$x." and preco<=".$y;
	
	// $result = $mysqli->query($query2);
	
// }

// function listar($mysqli) {
// 	$query = "SELECT produto_id, nome, estoque, preco from produto";
// 	$result = $mysqli->query($query);
	
// 	$dbdata = array();

// 	while( $row = $result->fetch_assoc()) {
// 		$dbdata[]=$row;
// 	}
// 	echo json_encode($dbdata);
// }

// function getByCode($mysqli, $code) {
// 	$query = "SELECT produto_id, nome, estoque, preco from produto where nome='".$code."'";
// 	$result = $mysqli->query($query);

// 	$dbdata = array();
	
// 	while( $row = $result->fetch_assoc()) {
// 		$dbdata[]=$row;
// 	}
// 	echo json_encode($dbdata);
// }

?>