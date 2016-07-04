
<div class="bs-callout bs-callout-info" id="callout-glyphicons-location">
	<ul class="">
		<li role="presentation"
			<?php if($pagina == 'managment/index')echo ('class="active"');?>><a
			href="<?php echo base_url('managment')?>">Inicio</a></li>
		<li role="presentation"
			<?php if($pagina == 'managment/user')echo ('class="active"');?>><a
			href="<?php echo base_url('managment/user')?>">Usuarios</a></li>
		<li role="presentation"
			<?php if($pagina == 'managment/create')echo ('class="active"');?>><a
			href="<?php echo base_url('managment/create')?>">Crear Correo</a></li>
		<li role="presentation"
			<?php if($pagina == 'managment/send')echo ('class="active"');?>><a
			href="<?php echo base_url('managment/send')?>">Enviar Correo</a></li>
	</ul>
</div>