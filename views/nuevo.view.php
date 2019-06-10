<?php require 'header.php'; ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Nuevo instructivo</h2>
			<form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="text" name="titulo" placeholder="Título del instructivo">
				<textarea name="texto" placeholder="Texto del instructivo"></textarea>
				<input type="submit" value="Guardar">
			</form>
		</article>
	</div>
</div>
<?php require 'footer.php'; ?>