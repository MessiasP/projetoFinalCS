<?php $painel_atual = "admin";?>
<html lang="pt-BR">
<head>
	<?php require "../config.php"; ?>
	<meta charset="UTF-8"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<script>
		function enviar(){

			if(op.value == 'create') {

				op = document.getElementById("op").value;
				nome = document.getElementById("nome").value;
				estoque = document.getElementById("estoque").value;
				preco = document.getElementById("preco").value;
				
				$.get("http://localhost/projetoFinal/admin/catalog.php?op="+op+
																	"&nome="+nome+
																	"&estoque="+estoque+
																	"&preco="+preco,
					function(data){
						alert(data);
						location.reload();
				});
			}
			
			if(op.value == 'findAll') {
				
				op = document.getElementById("op").value;
				
				$.get("http://localhost/projetoFinal/admin/catalog.php?op="+op,function(data){			

					let busca = document.getElementById("repo-list").innerHTML = data;

				});
			}
			
			if(op.value == 'update') {

				op = document.getElementById("op").value;
				id = document.getElementById("id").value;
				nome = document.getElementById("nome").value;
				estoque = document.getElementById("estoque").value;
				preco = document.getElementById("preco").value;
				
				$.get("http://localhost/projetoFinal/admin/catalog.php?op="+op+"&id="+id+"&nome="+nome+
																	  "&estoque="+estoque+"&preco="+preco,
					function(data){
						alert(data);
						location.reload();
				});
			}

			if(op.value == 'delete') {

				op = document.getElementById("op").value;
				id = document.getElementById("id").value;
				
				$.get("http://localhost/projetoFinal/admin/catalog.php?op="+op+"&id="+id,
					function(data){
						alert(data);
						location.reload();
				});
			}

		}
	</script>
		
</head>
<body style="background-color: black;">
		<div class="container my-5" style="width: 70rem; heigth: 30rem; background-color: white; padding: 5vh; margin: 3% auto 3% auto;" >

				<h2>Bem Vindo!!</h2>
				<br>
				<label for="op">Selecione o metodo que deseja:</label>
				<select class="form-control" id="op">
					<option value="create">Cadastrar</option>
					<option value="update">Atualizar</option>
					<option value="delete">Deletar</option>
					<option value="findAll">Ver</option>
				</select>
				<br><br>

				<h4>Atualizar ou deletar produto:</h4>
				<br>
				<div class="form-group">
					<input type="text" id="id" class="form-control" required>
					<label class="form-control-placeholder">Codigo desejado:</label>
				</div>
				<br>		
				<h4 style="text-aling: center;">Caso escolha cadastro ou atualização de produto complete os campos abaixo:</h4>	

				<br>
				<div class="form-group">
					<input type="text" id="nome" class="form-control" required>
					<label class="form-control-placeholder">Nome desejado:</label>
				</div>
				<br>

				<div class="form-group">
					<input type="text" id="estoque" class="form-control" required>
					<label class="form-control-placeholder">Quantidade em estoque:</label>
				</div>
				<br>

				<div class="form-group">
					<input type="text" id="preco" class="form-control" required>
					<label class="form-control-placeholder">Preço:</label>
				</div>
				<br>

				<button type="button" class="btn btn-primary btn-lg btn-block" onclick="enviar()">ENVIAR</button>
				<br><br>
				<ul id="repo-list"></ul>
		</div>
		
</body>
<style>
	.form-group {
		position: relative;
		margin-bottom: 1.5rem;
	}

	.form-control-placeholder {
		position: absolute;
		top: 0;
		padding: 7px 0 0 13px;
		transition: all 200ms;
		opacity: 0.5;
	}

	.form-control:focus + .form-control-placeholder,
	.form-control:valid + .form-control-placeholder {
		font-size: 120%;
		transform: translate3d(0, -100%, 0);
		opacity: 1;
	}
</style>
</html>
