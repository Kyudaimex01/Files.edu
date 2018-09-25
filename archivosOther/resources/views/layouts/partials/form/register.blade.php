
<link rel="stylesheet" href="{{ asset('css/form_css/estilos.css') }}">
@section('registerform')
<form action="">
    <h2>REGISTRO</h2>
    <!--no estoy muy seguro de los usuarios-->
    <div>
        Usuarios:
        <select name="" id="">
            <option value="">Admin</option>
            <option value="" selected="selected">User</option>
        </select>
    </div>
    <input type="text" name="email" placeholder="E-mail">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellidos">
    <input type="text" name="telefono" placeholder="Telefono">
    <input type="text" name="contraseña" placeholder="Contraseña">
    <input type="button" value="REGISTRAR" id="boton" >
</form>
    @endsection
