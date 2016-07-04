
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">

<title>Enviador Correos</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url('/css/bootstrap.min.css')?>"
	rel="stylesheet">
<link href="<?php echo base_url('/css/styles.css')?>" rel="stylesheet">
<link href="<?php echo base_url('/css/docs.css')?>" rel="stylesheet">
<script src="<?php echo base_url('/js/bootstrap.min.js')?>"></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<div class="container">
		<div class="header clearfix">
			<nav>
				<ul class="nav nav-pills pull-right">
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
			</nav>
			<h3 class="text-muted">Mailer</h3>
		</div>

		<div class="row">
			<div class="col-md-12">

				<div class="bs-callout bs-callout-info"
					id="callout-glyphicons-location">
					<h4>Info</h4>
					<ul>
						<li>Existen <code><?php echo 'cant_usuarios'?> usuarios</code>
						</li>

					</ul>
				</div>
			</div>

		</div>
		<div class="row marketing">
			<div class="col-md-12">
				<?php $this->load->view($pagina)?>
			</div>
		</div>

		<footer class="footer">
			<p>&copy; Desarrollado por BananaCode.cl</p>
		</footer>

	</div>
	<!-- /container -->


	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>
