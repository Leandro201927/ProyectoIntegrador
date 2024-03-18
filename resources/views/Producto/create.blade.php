@extends('Producto.index')

@section('producto')
<h1>Crear Producto</h1>

<form action="{{ route('producto.store') }}" method="POST">
    @csrf

    <label for="UsuarioID">UsuarioID (Usuario al que deseas enlazar el producto):</label>
    <input type="text" id="UsuarioID" name="UsuarioID">

    <label for="Nombre">Nombre:</label>
    <input type="text" id="Nombre" name="Nombre">

    <label for="Precio">Precio:</label>
    <input type="text" id="Precio" name="Precio">

    <input type="submit" value="Crear">
</form>
@endsection
