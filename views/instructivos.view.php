<?php require 'header.php'; ?>

	<div class="contenedor">
		<?php foreach ($posts as $post): ?>
		<div class="post">
			<article>
				<h2 class="titulo"><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['titulo'];?></a></h2>
				<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
				<a href="single.php?id=<?php echo $post['id'];?>" class="continuar">Ver instructivo</a>
			</article>
		</div>
			
		<?php endforeach; ?>



		<?php require 'paginacion.php'; ?>
	</div>
	
<?php require 'footer.php' ?>
	