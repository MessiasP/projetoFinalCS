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
			console.log("OP ",op.value);
			console.log("Nome ",nome.value);
			console.log("Estoque ",estoque.value);
			console.log("Preço ",preco.value);

			op = document.getElementById("op").value;
			nome = document.getElementById("nome").value;
			estoque = document.getElementById("estoque").value;
			preco = document.getElementById("preco").value;
			
			$.get("http://localhost/projetoFinal/admin/catalog.php?op="+op+
																  "&nome="+nome+
																  "&estoque="+estoque+
																  "&preco="+preco,
				function(data){
					console.log(data);
					console.log("chegou aqui!!");
					
					// var valor = JSON.parse(data);
					// resul.innerHTML = valor[0].qtd;
			});
		}
	</script>
		
</head>
<body>
	
	<div class="container">

			<h2>Bem Vindo!!</h2>
			<p>Escolha </p>
			<label for="op">Selecione o metodo que deseja:</label>
			<select class="form-control" id="op">
				<option value="create">Cadastrar</option>
				<option value="update">Atualizar</option>
				<option value="delete">Deletar</option>
				<option value="getAll">Ver</option>
			</select>
			<br>

				<p style="text-aling: center;">Cadastro de produto: <p>	
				
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
			
		<!-- <button onClick="<script language='javascript'>window.location='admin';</script>">sdasda</button> -->
			
	</div>
		
</body>
</html>
