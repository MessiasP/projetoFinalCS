<?php $painel_atual = "portaria"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Portaria</title>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<?php require "../config.php"; ?>
</head>

<body>

<div id="box">
 
 <div id="porteiro">
  <h1><strong>Seu código é:</strong>  <a href="../config.php?acao=quebra"><strong>SAIR</strong></a></h1>
 </div><!-- porteiro -->
 
 <div id="logo">
  <img src="../img/logo.png" width="250px" />
 </div><!-- logo -->
 
 <div id="campo_busca">
   <form name="" method="post" action="" enctype="multipart/form-data">
   <input type="text" name="cpf" value="" />
   <input class="input" type="submit" name="send" value="Buscar" />
  </form>
  
  
  <?php
if(isset($_POST['send'])){
	$cpf = $_POST['cpf'];
	
	if($cpf == ''){
		echo "<script language='javascript'>window.alert(' Por favor , Digite o numero de matricula ou CPF!');</script>";
	}else{
		$sql ="SELECT * FROM estudantes WHERE code = '$cpf' AND nome = '$cpf' OR cpf = '$cpf' OR rg = '$cpf'";
		
		$result = mysqli_query($conexao, $sql);
		/*se encontra o valor maior que zero exixtiu quela busca*/
		if(mysqli_num_rows($result) > 0){
			while($res_1 = mysqli_fetch_assoc($result)){
			}
			
		}
	}
}
		
?>
  

<br><br><br><br><h3><strong>Aluno:</strong> <strong>Nº de matricula:</strong> <strong>RG:</strong> 
 <a href="index.php?pg=confirma&code_a=<img src="../img/correto.jpg" title="Confirmar" border="0" /></a>
 <a href="index.php"><img src="../img/deleta.png" width="24px" title="Cancelar" />
 </a> </h3><input type="hidden" name="codes" value="" />  
 



 </div><!-- campo_busca -->
 <br><br><br>
</div><!-- box -->
</body>
</html>
































