<?php

$mysqli = new mysqli('localhost','root','','aula3_clientserver',3308);

$op = $_GET["op"];

switch ($op) {
    case "list":
        listar($mysqli);
        break;
    case "filterCode":
        getByCode($mysqli, $_GET["code"]);
        break;
    case "filterPrice":
        getByPrice($mysqli, $_GET["from"],$_GET["to"]);
        break;
	case "reajuste":
		reajuste($mysqli, $_GET["x"],$_GET["y"],$_GET["z"]);
		break;
	default: 
		echo "Operacao invalida";
		break;
}

function reajuste($mysqli, $nome,$estoque,$preco){

	$query = " insert into produto (produto_id, nome, estoque, preco) values nome>=".$nome." and estoque<=".$estoque "and preco<=".$preco;
		$result = $mysqli->query($query);
	
		$dbdata = array();
		
		while( $row = $result->fetch_assoc()) {
			$dbdata[]=$row;
		}
		echo json_encode($dbdata);
	$query2 = "update produto set preco = preco*1.".$z." where preco>=".$x." and preco<=".$y;
	
	$result = $mysqli->query($query2);
	
}
function listar($mysqli) {
	$query = "SELECT produto_id, nome, estoque, preco from produto";
	$result = $mysqli->query($query);
	
	$dbdata = array();

	while( $row = $result->fetch_assoc()) {
		$dbdata[]=$row;
	}
	echo json_encode($dbdata);
}

function getByCode($mysqli, $code) {
	$query = "SELECT produto_id, nome, estoque, preco from produto where nome='".$code."'";
	$result = $mysqli->query($query);

	$dbdata = array();
	
	while( $row = $result->fetch_assoc()) {
		$dbdata[]=$row;
	}
	echo json_encode($dbdata);
}

function getByPrice($mysqli, $from, $to) {
	$query = "SELECT produto_id, nome, estoque, preco from produto where preco>=".$from." AND preco<=".$to;
	$result = $mysqli->query($query);

	$dbdata = array();
	
	while( $row = $result->fetch_assoc()) {
		$dbdata[]=$row;
	}
	echo json_encode($dbdata);
}


?>