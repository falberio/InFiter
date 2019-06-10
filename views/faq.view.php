<?php require 'header.php'; ?>

<div class="subheader">

		<div class="contenedor contenedor-top collapse" id="collapseExample">
			<div class="pregunta">
				<h2>Hola,<br>estamos para ayudarte.</h2>
			</div>

			<div class="busqueda">
				<form name="busqueda" class="buscar" action="<?php echo RUTA;  ?>/buscar.php" method="get">
					<input type="text" name="busqueda" placeholder="">
					<button type="submit" class="icono fas fa-search"></button>
				</form>
			</div>
			<!-- <div class="titulo" >
				<h1>Categorias</h1>
				<h1><i data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="fas fa-chevron-down"></i></h1>
			</div> -->
		</div>


		<!-- <div class="contenedor collapse" id="collapseExample">
			<div class="categorias">
				<div class="categoria">
					<a href="#sgc">
						<i class="fas fa-address-card"></i>
						<p>SGC</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#comerciales">
						<i class="fas fa-money-check-alt"></i>
						<p>Comerciales</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#controlador">
						<i class="fas fa-ticket-alt"></i>
						<p>Controlador fiscal</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#equipos">
						<i class="fas fa-hdd"></i>
						<p>Equipos</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#autogestion">
						<i class="fas fa-desktop"></i>
						<p>Autogestión</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#control_de_acceso">
						<i class="fas fa-fingerprint"></i>
						<p>Control de acceso</p>
					</a>
				</div>

			</div>
		</div> -->
</div>



<div class="contenedor accordion contenido" id="accordionExample">

	<?php foreach ($categorias_faqs as $categoria_faqs): ?>
	<section id="<?php echo $categoria_faqs['categoria'];?>">
		<div class="titulo">
			<h2><?php echo $categoria_faqs['name'];?></h2>
		</div>


		<?php foreach ($faqs as $faq): ?>
		<?php if ($faq['categoria'] == $categoria_faqs['categoria']): ?>
			<div class="item">
			    <div class="question" id="heading<?php echo $faq['id'];?>">
			     	<h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $faq['id'];?>" aria-expanded="false" aria-controls="collapse<?php echo $faq['id'];?>">
				        <?php echo $faq['question'];?><i class="fas fa-chevron-down"></i>
				        </button>
			      	</h2>
			    </div>

			    <div id="collapse<?php echo $faq['id'];?>" class="answer collapse" aria-labelledby="heading<?php echo $faq['id'];?>" data-parent="#accordionExample">
			        <p><?php echo $faq['answer'];?></p>
			    </div>
	    	</div>
		<?php endif; ?>
		<?php endforeach; ?>

	</section>	
	<?php endforeach; ?>



	


</div>
	
<?php require 'footer.php' ?>