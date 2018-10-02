
<link rel="stylesheet" href="{{ asset('css/form_css/estilos.css') }}">
@extends('layouts.header')
@yield('loginform')

@section('loginform')
<form action="">
    <h2>INICIAR SECION</h2>
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="contraseña" placeholder="Contraseña">
    <!-- <label>
         <input type="checkbox" name="recordar">Recordar Contraseña
     </label> -->
    <input type="button" value="INGRESAR" id="boton">

</form>
@endsection