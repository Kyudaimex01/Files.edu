
<link rel="stylesheet" href="{{ asset('css/form_css/estilos.css') }}">
@section('galleryform')
<form action="">
    <h2>CARGAR A GALERIA</h2>
    <input type="text" name="titulo" placeholder="Titulo">
    <input type="file" name="imagen" value="Imagen">
    <input type="button" value="PUBLICAR" id="boton">
</form>
@endsection
