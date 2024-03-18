@extends('Usuario.index')

@section('usuario')
<h1>Crear Usuario</h1>

<form action="{{ route('usuario.store') }}" method="POST">
    @csrf

    <label for="Nombre">Nombre:</label>
    <input type="text" id="Nombre" name="Nombre">

    <label for="Correo">Correo:</label>
    <input type="email" id="Correo" name="Correo">

    <label for="Contraseña">Contraseña:</label>
    <input type="password" id="Contraseña" name="Contraseña">

    <label for="Rol">Rol:</label>
    <input type="text" id="Rol" name="Rol">

    <label for="Cedula">Cédula:</label>
    <input type="text" id="Cedula" name="Cedula">

    <label for="Estado">Estado:</label>
    <input type="text" id="Estado" name="Estado">

    <input type="submit" value="Crear">
</form>
@endsection
