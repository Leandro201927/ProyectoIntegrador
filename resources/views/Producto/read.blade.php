@extends('Producto.index')

@section('producto')
  <h1>Lista de Productos</h1>
  <a href="{{ route('producto.create') }}" class="btn btn-primary">Crear Producto</a>
  <table>
      <thead>
          <tr>
              <th>ID</th>
              <th>UsuarioID</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Acciones</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($productos as $producto)
              <tr>
                  <td>{{ $producto->ID }}</td>
                  <td>{{ $producto->UsuarioID }}</td>
                  <td>{{ $producto->Nombre }}</td>
                  <td>{{ $producto->Precio }}</td>
                  <td>
                      <a href="{{ route('producto.edit', $producto->ID) }}">Actualizar</a>
                      <form action="{{ route('producto.destroy', $producto->ID) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit">Borrar</button>
                      </form>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
@endsection
