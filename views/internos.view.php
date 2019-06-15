<?php require 'header.php'; ?>


<div class="contenedor contenido-internos">

	<?php foreach ($internos as $interno): ?>
	<div class="item">
		<p class="sede"><?php echo $interno['sede'];?></p>
		<h2><?php echo $interno['colaborador'];?></h2>
		<p class="interno"><i class="fas fa-phone-square-alt"></i><?php echo $interno['interno'];?></p>
		<img src="img/waves.png" alt="">
	</div>
	<?php endforeach; ?>

	


</div>
	
<?php require 'footer.php' ?>