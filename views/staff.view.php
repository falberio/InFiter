<?php require 'header.php'; ?>


<div class="contenedor">
	<div class="contenido-colaboradores">

	<div class="row">
		<div class="col-sm-12">
			<form class="filtros" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
				<select class="form-control" name="sede" id="">
					<!-- <option value="todas">Todas</option> -->
					<option value="todas">Todas</option>
					<option value="abasto">Abasto</option>
					<option value="almagro">Almagro</option>
					<option value="barrio norte">Barrio Norte</option>
					<option value="caballito">Caballito</option>
					<option value="flores">Flores</option>
					<option value="microcentro">Microcentro</option>
				</select>

				<select class="form-control" name="turno" id="">
					<!-- <option value="todos">Todos</option> -->
					<option value="todos">Todos</option>
					<option value="tarde">Tarde</option>
					<option value="mañana">Mañana</option>
					<option value="general">General</option>
				</select>

				

				<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
					<span class="fas fa-filter"></span>
				</button>
			</form>
			<caption>
					<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">Agregar nuevo
					<span class="fas fa-plus"></span></button>
			</caption>
			<table class="table table-hover table-condensed table-bordered">
				
				<tr>
					<td>DNI</td>
					<td>Colaborador</td>
					<td>Sede</td>
					<td>Puesto</td>
					<td>Turno</td>
					<td>Email</td>
					<td>Teléfono</td>
					<td>Editar</td>
					<td>Eliminar</td>
					<!-- <td>Nacimiento</td>
					<td>Domicilio</td>
					<td>Localidad</td> -->
				</tr>

				<?php foreach ($colaboradores as $colaborador): ?>
					<tr>
						<td><?php echo $colaborador['dni'];?></td>
						<td><?php echo $colaborador['colaborador'];?></td>
						<td><?php echo $colaborador['sede'];?></td>
						<td><?php echo $colaborador['puesto'];?></td>
						<td><?php echo $colaborador['turno'];?></td>
						<td><a href="mailto: <?php echo $colaborador['mail'];?>"><?php echo $colaborador['mail'];?></a></td>
						<td><?php echo $colaborador['telefono'];?></td>
						<td>
							<button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion">
								<i class="fas fa-pencil-alt"></i>
							</button>
						</td>
						<td>
							<button class="btn btn-danger">
								<i class="fas fa-trash-alt"></i>
							</button>
						</td>
						<!-- <td><?php echo $colaborador['nacimiento'];?></td>
						<td><?php echo $colaborador['domicilio'];?></td>
						<td><?php echo $colaborador['localidad'];?></td> -->
					</tr>
				<?php endforeach; ?>

<!-- 				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
						<button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion">
							<i class="fas fa-pencil-alt"></i>
						</button>
					</td>
					<td>
						<button class="btn btn-danger">
							<i class="fas fa-trash-alt"></i>
						</button>
					</td>
				</tr> -->
			</table>
		</div>
	</div>

	


<!-- Modal para registro nuevo -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo colaborador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="">DNI: </label>
        <input type="text" name="" id="dni" class="form-control">
        <label for="">Colaborador: </label>
        <input type="text" name="" id="colaborador" class="form-control">
        <label for="">Sede: </label>
        <input type="text" name="" id="sede" class="form-control">
        <label for="">Puesto: </label>
        <input type="text" name="" id="puesto" class="form-control">
        <label for="">Turno: </label>
        <input type="text" name="" id="turno" class="form-control">
        <label for="">Email: </label>
        <input type="text" name="" id="mail" class="form-control">
        <label for="">Teléfono: </label>
        <input type="text" name="" id="telefono" class="form-control">
        <label for="">Fecha de Nacimiento: </label>
        <input type="text" name="" id="telefono" class="form-control">
        <label for="">Domicilio: </label>
        <input type="text" name="" id="domicilio" class="form-control">
        <label for="">Localidad: </label>
        <input type="text" name="" id="localidad" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="guardarnuevo" data-dismiss="modal">Agregar</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal para editar datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar colaborador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="text" hidden="" id="idpersona" name="">
        <label for="">DNI: </label>
        <input type="text" name="" id="dniu" class="form-control">
        <label for="">Colaborador: </label>
        <input type="text" name="" id="colaboradoru" class="form-control">
        <label for="">Sede: </label>
        <input type="text" name="" id="sedeu" class="form-control">
        <label for="">Puesto: </label>
        <input type="text" name="" id="puestou" class="form-control">
        <label for="">Turno: </label>
        <input type="text" name="" id="turnou" class="form-control">
        <label for="">Email: </label>
        <input type="text" name="" id="mailu" class="form-control">
        <label for="">Teléfono: </label>
        <input type="text" name="" id="telefonou" class="form-control">
        <label for="">Domicilio: </label>
        <input type="text" name="" id="domiciliou" class="form-control">
        <label for="">Localidad: </label>
        <input type="text" name="" id="localidadu" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
      </div>
    </div>
  </div>
</div>




	</div>
</div>


	
<?php require 'footer.php' ?>