<?php require 'header.php'; ?>


<div class="contenedor contenido-anydesk">

	<?php foreach ($anydesks as $anydesk): ?>
	<div class="item">
		<h2><?php echo $anydesk['sede'];?> <?php echo $anydesk['molinete'];?></h2>
		<h2><?php echo $anydesk['id_anydesk'];?></h2>
		<img src="img/waves.png" alt="">
</div>
	<?php endforeach; ?>



<!-- 		<?php foreach ($anydesks as $anydesk): ?>
			<div class="item">
			    <div class="question" id="heading<?php echo $anydesk['id'];?>">
			     	<h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $anydesk['id'];?>" aria-expanded="false" aria-controls="collapse<?php echo $anydesk['id'];?>">
				        <?php echo $anydesk['sede'];?><i class="fas fa-chevron-down"></i>
				        </button>
			      	</h2>
			    </div>

			    <div id="collapse<?php echo $anydesk['id'];?>" class="answer collapse" aria-labelledby="heading<?php echo $anydesk['id'];?>" data-parent="#accordionExample">
			        <p><?php echo $anydesk['id_anydesk'];?></p>
			    </div>
	    	</div>
		<?php endforeach; ?> -->




	


</div>
	
<?php require 'footer.php' ?>