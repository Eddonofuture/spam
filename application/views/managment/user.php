<div class="col-md-6">
	<div class="bs-callout bs-callout-info"
		id="callout-glyphicons-location">
		<h4>Crear Correo</h4>
		<br>
		<?php
		echo form_open ( 'managment/create_user' );
		?>
			<div class="form-group">
			<label for="exampleInputEmail1">Email</label> <input type="email"
				class="form-control" id="exampleInputEmail1" placeholder="Email"
				name="email" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Nombre</label> <input type="text"
				class="form-control" id="exampleInputPassword1" placeholder="Nombre"
				name="nombre">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Apellido</label> <input
				type="text" class="form-control" id="exampleInputPassword1"
				placeholder="Apellido" name="apellido">
		</div>
		<button type="submit" class="btn btn-default">Crear</button>
		</form>
	</div>
</div>

<?php /*<div class="col-md-6">

	<div class="bs-callout bs-callout-info"
		id="callout-glyphicons-location">

		<h4>Buscar</h4>
		<br>
			<?php echo form_open('managment/user','class="form-inline"');?>

			<div class="form-group">
				<label for="exampleInputEmail2">Email</label> <input type="email"
					class="form-control" id="exampleInputEmail2"
					placeholder="jane.doe@example.com">
			</div>
			<button type="submit" class="btn btn-default">Buscar</button>
		</form>
		
		<br> <br> <br>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Enviado</th>
					<th>Editar</th>
					<th>Borrar</th>
				</tr>
			</thead>
		</table>



	</div>
	
</div>
*/ ?>