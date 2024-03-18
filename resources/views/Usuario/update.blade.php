@extends('Usuario.index')

@section('usuario')
<h1>Actualizar Usuario</h1>

<form action="{{ route('usuario.update', $usuario->UsuarioID) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="Nombre">Nombre:</label>
    <input type="text" id="Nombre" name="Nombre" value="{{ $usuario->Nombre }}">

    <label for="Correo">Correo:</label>
    <input type="email" id="Correo" name="Correo" value="{{ $usuario->Correo }}">

    <label for="Contraseña">Contraseña:</label>
    <input type="password" id="Contraseña" name="Contraseña">

    <label for="Rol">Rol:</label>
    <input type="text" id="Rol" name="Rol" value="{{ $usuario->Rol }}">

    <label for="Cedula">Cédula:</label>
    <input type="text" id="Cedula" name="Cedula" value="{{ $usuario->Cedula }}">

    <label for="Estado">Estado:</label>
    <input type="text" id="Estado" name="Estado" value="{{ $usuario->Estado }}">

    <!-- todo lo que hay en un formulario lo transforma a un -> $request -->

    <input type="submit" value="Actualizar">
</form>
@endsection
