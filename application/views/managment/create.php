<div class="bs-callout bs-callout-info" id="callout-glyphicons-location">

		<?php echo form_open('managment/create_email','class="form-horizontal"');?>
		<div class="form-group">
		<label for="exampleInputEmail1">Nombre Correo</label> <input
			type="text" class="form-control" id="exampleInputEmail1"
			placeholder="Ponle nombre al correo" name="nombre_correo" required>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Correo Emisor</label> <input
			type="email" class="form-control" id="exampleInputEmail1"
			placeholder="Email" name="sender" required>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Encabezado</label> <input
			type="text" class="form-control" id="exampleInputPassword1"
			placeholder="Header" name="header" required>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Imagen</label> <input
			type="text" class="form-control" id="exampleInputPassword1"
			placeholder="Imagen" name="imagen" required>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Cuerpo correo</label>

		<textarea class="form-control" id="exampleInputPassword1" rows="20"
			name="body" required> </textarea>

	</div>
	<button type="submit" class="btn btn-default">Guardar</button>
	</form>
</div>

<script type="text/javascript"
	src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url('js/tinymce/jquery.tinymce.min.js'); ?>"></script>
<script type="text/javascript"
	src="<?php echo base_url('js/tinymce/tinymce.min.js'); ?>"></script>

<script type="text/javascript">
tinymce.init({
	  selector: 'textarea',
	  height: 500,
	  plugins: [
	    'advlist autolink lists link image charmap print preview anchor',
	    'searchreplace visualblocks code fullscreen',
	    'insertdatetime media table contextmenu paste code'
	  ],
	  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	  content_css: [
	    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
	    '//www.tinymce.com/css/codepen.min.css'
	  ]
	});
</script>