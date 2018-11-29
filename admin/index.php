<?php $painel_atual = "admin";?>
<html lang="pt-BR">
<head>
	<?php require "../config.php"; ?>
	<meta charset="UTF-8"/>
	<!--esse abaixo jquery que foi baixado-->
	<script src="./jquery.js"></script>

	<!-- dropdown dependencies-->
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <!--fim-->
		
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
						// if(status.value == 'sucess') {
						alert("\n"+data+ "\nStatus: "+status);
						this.products = data;
						// }
						// alert("Erro, Tente novamente!");
				});
			}
			
			if(op.value == 'findAll') {

				var products = [];
				op = document.getElementById("op").value;
				
				$.get("http://localhost/projetoFinal/admin/catalog.php?op="+op,
					function(data){
						if(status == 'sucess') {
						alert("\n"+data+ "\nStatus: "+status);
						this.products = data;
						}
						alert("Erro, Tente novamente!");
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
						alert("\n"+data+ "\nStatus: "+status);
				});
			}

			if(op.value == 'delete') {

				op = document.getElementById("op").value;
				id = document.getElementById("id").value;
				
				$.get("http://localhost/projetoFinal/admin/catalog.php?op="+op+"&id="+id,
					function(data){
						alert("\n"+data+ "\nStatus: "+status);
				});
			}

		}
	</script>
		
</head>
<body>
	
	<div class="container">

			<h2>Bem Vindo!!</h2>
			<br>
			<label for="op">Selecione o metodo que deseja:</label>
			<select class="form-control" id="op">
				<option value="create">Cadastrar</option>
				<option value="update">Atualizar</option>
				<option value="delete">Deletar</option>
				<option value="findAll">Ver</option>
			</select>
			<br>
			<!-- <input type = "submit" onclick="enviar()" value="Buscar"> -->
			<br><br>
			<h4>Atualizar ou deletar produto:</h4>
			<label>Codigo desejado:</label>
			<br>
			<input type="text" id="id">
			<br><br>	
			<h4 style="text-aling: center;">Caso escolha cadastro ou atualização de produto complete os campos abaixo:</h4>	

			<label>Nome desejado:</label>
			<br>
			<input type="text" id="nome">
			<br><br>
			<label>Quantidade em estoque:</label>
			<br>
			<input type="text" id="estoque">
			<br><br>
			<label>Preço:</label>
			<br>
			<input type="text" id="preco">
			<br>
			<br>
			<input type = "submit" onclick="enviar()">

			<br><br>

			<!-- <label for="let d of products">{{d.nome}}</label> -->
			
		<!-- <button onClick="<script language='javascript'>window.location='admin';</script>">sdasda</button> -->
			
	</div>
		
</body>
</html>
