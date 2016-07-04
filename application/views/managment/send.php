
<div class="bs-callout bs-callout-info" id="callout-glyphicons-location">
	<table class="table table-striped">

		<thead>
			<tr>
				<th>Nombre</th>
				<th>Correo Emisor</th>
				<th>Encabezado</th>
				<th>Enviar</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($correos as $correo){?>
			<tr>
				<td><?php echo $correo->nombre_correo?></td>
				<td><?php echo $correo->sender?></td>
				<td><?php echo $correo->header?></td>
				<td>
				<?php echo form_open ( 'managment/send_email/'.$correo->idcorreo );?>
				<button>Enviar</button>
					</form>
				</td>

			</tr>
<?php } ?>
		</tbody>
	</table>
</div>