<?php require 'header.php'; ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Nueva FAQ</h2>
			<form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<select name="categoria">
					<option value="sgc">SGC</option>
					<option value="comerciales">Comerciales</option>
					<option value="controlador">Controlador Fiscal</option>
					<option value="equipos">Equipos</option>
					<option value="atogestion">Autogestión</option>
					<option value="control_de_acceso">Control de acceso</option>
				</select>
				<input type="text" name="question" placeholder="Pregunta">
				<input type="text" name="answer" placeholder="Respuesta">
				<input type="submit" value="Guardar">
			</form>
		</article>
	</div>
</div>
<?php require 'footer.php'; ?>