<?php 
	include_once("dados/inforProdutos.php");
	$cod = $_GET['cod'];
	
 ?>

<div id="imagemPaginaPrincipal">

	<div class="imgDestaqueInformacaoProduto">

		<img src=" <?php echo $produtos[$cod]['img']?>">
		
	</div>
	<div class="destaque">
		<h1><?php echo $produtos[$cod]['titulo']  ?></h1>
		<p>
			<?php echo $produtos[$cod]['informacao']  ?>
		</p>
		
		
	</div>
</div>
