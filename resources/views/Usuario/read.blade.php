@extends('Usuario.index')

@section('usuario')
  <h1>Lista de Usuarios</h1>
  <a href="{{ route('usuario.create') }}" class="btn btn-primary">Crear Usuario</a>
  <table>
      <thead>
          <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Rol</th>
              <th>Cédula</th>
              <th>Estado</th>
              <th>Fecha de Registro</th>
              <th>Acciones</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($usuarios as $usuario)
              <tr> <!-- tr = fila -->
                  <td>{{ $usuario->UsuarioID }}</td> <!-- td = columna 1 de la fila actual -->
                  <td>{{ $usuario->Nombre }}</td>
                  <td>{{ $usuario->Correo }}</td>
                  <td>{{ $usuario->Rol }}</td>
                  <td>{{ $usuario->Cedula }}</td>
                  <td>{{ $usuario->Estado }}</td>
                  <td>{{ $usuario->Fecha_Registro }}</td>
                  <td>
                      <a href="{{ route('usuario.edit', $usuario->UsuarioID) }}">Actualizar</a>
                      <form action="{{ route('usuario.destroy', $usuario->UsuarioID) }}" method="POST">
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
