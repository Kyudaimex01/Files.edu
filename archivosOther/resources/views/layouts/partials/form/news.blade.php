
<link rel="stylesheet" href="{{ asset('css/form_css/estilos.css') }}">
@section('newsform')
<form action="">
    <h2>NOTICIAS</h2>
    <input type="text" name="autor" placeholder="Autor">
    <input type="text" name="titulo" placeholder="Titulo">
    <textarea name="descripcion" placeholder="Escriba aqui"></textarea>
    <input type="file" name="imagen" value="Imagen">
    <input type="button" value="PUBLICAR" id="boton" >
</form>
@endsection