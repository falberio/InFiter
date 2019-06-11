<?php require 'header.php'; ?>





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