<?php require 'header.php'; ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Editar artículo</h2>
			<form class="formulario" method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="hidden" value="<?php echo $post['id']; ?>" name="id">
				<input type="text" name="titulo" value="<?php echo $post['titulo']; ?>">
				<textarea name="texto"><?php echo $post['texto']; ?></textarea>
				<input type="submit" value="Guardar">
			</form>
		</article>
	</div>
</div>
<?php require 'footer.php'; ?>