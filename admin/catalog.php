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
	create($mysqli, $_GET["nome"], $_GET["estoque"], $_GET["preco"]);
	break;
	case "findAll":
        findAll($mysqli);
        break;
	case "update":
        update($mysqli, $_GET["id"], $_GET["nome"], $_GET["estoque"], $_GET["preco"]);
        break;
	case "delete":
	delete($mysqli, $_GET["id"]);
		break;
	default:
		echo "Operacao invalida!";
		break;
	}
	
	function create($mysqli, $nome, $estoque, $preco) {

		$query = "INSERT INTO produto (nome, estoque, preco) VALUES ('".$nome."', '".$estoque."', '".$preco."')";
		$result = $mysqli -> query($query);
		echo ("Produto criado com sucesso!");
		echo("\nNome: ");
		echo($nome);
		echo(", Quantidade: ");
		echo($estoque);
		echo(", Preço: ");
		echo($preco);
		echo(".");
	}

	function findAll($mysqli) {
		$query = "SELECT produto_id, nome, estoque, preco FROM produto";
		$result = $mysqli->query($query);
		
		$dbdata = array();
	
		while( $row = $result -> fetch_assoc()) {
			$dbdata[] = $row;
		}
		echo json_encode($dbdata);
	}

	function update($mysqli, $id, $nome, $estoque, $preco) {
		$query = "UPDATE produto SET nome='".$nome."', estoque='".$estoque."', preco='".$preco."' WHERE produto_id='".$id."'";
		$result = $mysqli->query($query);
		echo ("Produto atualizado com sucesso!");
		echo("\nCodígo: ");
		echo($id);
		echo(", Nome: ");
		echo($nome);
		echo(", Quantidade: ");
		echo($estoque);
		echo(", Preço: ");
		echo($preco);
		echo(".");
	}

	function delete($mysqli, $id) {
		$query = "DELETE FROM produto WHERE produto_id='".$id."'";
		$result = $mysqli->query($query);
		
		echo ("Produto deletado com sucesso!");
		echo("\nCodígo: ");
		echo($id);
		echo(".");
	}

?>