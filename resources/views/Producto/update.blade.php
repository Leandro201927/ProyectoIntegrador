@extends('Producto.index')

@section('producto')
<h1>Actualizar Producto</h1>

<form action="{{ route('producto.update', $producto->ID) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="Nombre">Nombre:</label>
    <input type="text" id="Nombre" name="Nombre" value="{{ $producto->Nombre }}">

    <label for="Precio">Precio:</label>
    <input type="text" id="Precio" name="Precio" value="{{ $producto->Precio }}">

    <input type="submit" value="Actualizar">
</form>
@endsection
