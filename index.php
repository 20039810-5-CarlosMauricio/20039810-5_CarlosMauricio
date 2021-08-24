<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>MAPA Back End 1</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
	<h1><center><p>Doces Caseiros Ltda.</p></center></h1>
</head>
<body>
	<div id="header">
		<div id="logo">
			<br><br><br>
			<a href="?pg=1" ><img src="images/Logo_DocesCaseiros.jpg"></a>
		</div>
	</div>
	<div id="menu">
		<nav>
			<ul>
				<br>
				<li><a href="index.php?pg=1">Home</a></li>
				<li><a href="index.php?pg=2">Quem somos</a></li>           
				<li><a href="index.php?pg=3">Contato</a></li>
				<li><a href="index.php?pg=4">localização</a></li>
				<br>
			</ul>
        </nav>
	</div>
	<div id="main">
		<div class="article">
		    	<?php 
					@$valor = $_GET['pg'];
					if($valor == 1){
						require 'pages/home.php';
					}
						else if($valor == 2){
							include('pages/quemsomos.php');
						}
						else if($valor == 3){
							include('pages/contato.php');
						}
						else if($valor == 4){
							include('pages/localizacao.php');
						}
						else if($valor == 5){
							include('pages/informacaoProduto.php');
						}
						else{
							require 'pages/index.php';
						}
				 ?>
		</div>
	</div>
<br>
	<div id="footer">
		<p>
			ALUNO: Carlos Maurício Alves Marinho <br>
			RA: 20039810-5<br>
			CURSO: SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET<br>
			<a href="?pg=1" ><img src="images/unicesumar.jpg"></a>
		</p>
	</div>
</body>
</html>