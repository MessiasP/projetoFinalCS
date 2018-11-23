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
		
		<script languege = "JavaScript">
			function enviar(){
			x = document.getElementById("x").value;
			y = document.getElementById("y").value;
			z = document.getElementById("z").value;
			
			$.get("http://localhost/catalog.php?op=reajuste&x="+x+"&y="+y+"&z="+z,function(data){
				console.log(data);
				var valor = JSON.parse(data);
				resul.innerHTML = valor[0].qtd;
			});
			
	
		}
		</script>
		
</head>
<body>
	
	<div class="container">
	<form >
    <div class="form-group">
		<p>x inicio 
		Z a porcetagem
		y final<p>
		
		x <input type="number" id="x" name="x" >
		y <input type="number" id="y" name="y" >
		z <input type="number" id="z" name="z" >

		
  		<h2>Form control: select</h2>
  <p>The form below contains two dropdown menus (select lists):</p>
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <br>
    </div>
  	<input type = "button" value = "Enviar" onclick="enviar()">

	<br><br>
	
	Quantidade de itens..: <span id="resul"></span>
	
	</form>
</div>
		
</body>
</html>
