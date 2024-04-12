@extends('layouts.app')

@section('content')
<a href="{{ route('user.create') }}" class="button is-link mb-5 mt-5">Create new user</a>
<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth
">
  <thead>
    <tr> <!-- Fila de encabezados de columna -->
      <th>Nombre</th>
      <th>Email</th>
      <th>Password</th>
      <th>Departamento</th>
      <th>Acciones</th>
    </tr>
  </thead>
    <tbody>
        @forelse($users as $user)
            <tr>
                <td><a href="{{route('user.edit', ['user' => $user->id]) }}">{{$user->name}}</a></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->departament_id }}</td>
                <td class="is-flex is-justify-content-center">
                    <a href="{{route('user.edit', ['user' => $user->id]) }}" class="button is-link m-1">Editar</a>
                    <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="button is-danger m-1" />
                    </form>
                </td>
            </tr>
        @empty
            <p>no data</p>
        @endforelse
    </tbody>
</table>
@endsection