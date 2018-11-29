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
	case "findAll":
		echo ("findAll");
        findAll($mysqli);
        break;
	case "update":
		echo ("update");
        update($mysqli, $_GET["id"], $_GET["nome"], $_GET["estoque"], $_GET["preco"]);
        break;
	case "delete":
	echo ("delete");
	delete($mysqli, $_GET["id"]);
		break;
	default:
		echo "Operacao invalida";
		break;
	}
	
	function create($mysqli, $nome, $estoque, $preco) {
		$query = "INSERT INTO produto (nome, estoque, preco) VALUES ('".$nome."', '".$estoque."', '".$preco."')";
		$result = $mysqli -> query($query);
		echo ("Produto creado com sucesso!");
	}

	function findAll($mysqli) {
		$query = "SELECT nome, estoque, preco FROM produto";
		$result = $mysqli->query($query);
		
		$dbdata = array();
	
		while( $row = $result->fetch_assoc()) {
			$dbdata[]=$row;
		}
		echo json_encode($dbdata);
		echo ("Produtos pesquisados com sucesso!");
	}

	function update($mysqli, $id, $nome, $estoque, $preco) {
		$query = "UPDATE produto SET nome='".$nome."', estoque='".$estoque."', preco='".$preco."' WHERE produto_id='".$id."'";
		$result = $mysqli->query($query);
		echo ("Produto atualizado com sucesso!");
	}

	function delete($mysqli, $id) {
		$query = "DELETE FROM produto WHERE produto_id='".$id."'";
		$result = $mysqli->query($query);
		echo ("Produto deletado com sucesso!");
	}

?>