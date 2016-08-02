	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 text-center">
			<h4>Publicaciones</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="form-group">
				<label for="textoTitulo">Titulo</label>
				<input type="text" class="form-control" id="textoTitulo" placeholder="Titulo">
			</div>
			<div class="form-group">
				<label for="textoAutor">Autor</label>
				<input type="text" class="form-control" id="textoAutor" placeholder="Autor">
			</div>
			<div class="form-group">
				<label for="textoAutor">Pais</label>
				<input type="text" class="form-control" id="textoPais" placeholder="Pais">
			</div>
			<div class="form-group">
				<label for="textoCategoria">Categoria</label>
				<input type="text" class="form-control" id="textoCategoria" placeholder="Categoria">
			</div>
			<div class="form-group">
				<label for="subirArchivo">Archivo PDF</label>
				<input type="file" id="subirPdf">
				<p class="help-block">Seleccione archivo pdf.</p>
			</div>
			<div class="form-group">
				<label for="subirBanner">Imagen Banner</label>
				<input type="file" id="subirBanner">
				<p class="help-block">Seleccione imagen de publicacion.</p>
			</div>
			<button onclick="nuevaPublicacion()" class="btn btn-default">Enviar</button>
		</div>
	</div>
	<script>
		function nuevaPublicacion(){
			$.ajax({
				method: "GET",
				url: "{{url('redmite/administra/publicacion/alta')}}",
				data:{
					titulo: $("#textoTitulo").val(),
					autor: $("#textoAutor").val(),
					pais: $("#textoPais").val(),
					categoria: $("#textoCategoria").val(),
					archivoPdf: $("#subirPdf").val(),
					archivoImagen: $("#subirBanner").val()
				},
				error: function (ts) {
					console.log(ts.responseText);
					alert('Error al guardar');
				}})
				.done(function (msg) {
					console.log ( "Data Saved: " + msg );
					alert('Exito al guardar');
				});
		}
	</script>