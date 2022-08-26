@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="text-center">Admins</h1>
  <div class="container">
    <a class="me-2 btn btn-success text-white" href="{{ url('/register') }}"><i class="icon ion-md-add mr-2 lead"></i> {{ __('Agregar nuevo usuario') }}</a>
  </div>
  <br>
    <table class="table table-hover text-center">
        <thead class="bg-primary text-white">
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Usuario</th>
            <th># Empleado</th>
            <th>Permisos</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td data-titulo="User ID">{{$user->id}}</td>
              <td data-titulo="Nombre">{{$user->name}}</td>
              <td data-titulo="Correo">{{$user->email}}</td>
              <td data-titulo="Usuario">{{$user->tipo}}</td>
              <td data-titulo="Numero Empleado">{{$user->numadmin}}</td>
              <td data-titulo="Permisos">{{$user->admin}}</td>
              <td data-titulo="Acciones">
                <a href="{{ url('/editadm', $user->id) }}" class="btn btn-info text-white"><span class="">Editar</span></a>
                <form action="{{ route('user.destroy', $user->id)}}" method="post">  
                  @csrf  
                  @method('DELETE')  
                  <button class="btn btn-danger text-white" type="submit"><span class="">Eliminar</span></button>  
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>
<style>
  td, th{
    border: 1px solid black;
  }
  @media (max-width: 30em){
    table{
      width: 100%;
    }
    table tr{
      display: flex;
      flex-direction: column;
      border: 1px solid black;
      border-radius: 15px;
      padding: 1em;
      margin-bottom: 1em;
    }
    table td[data-titulo]{
      display: flex;
    }

    td, th{
      border: none;
    }
    
    table td[data-titulo]::before{
      content: attr( data-titulo );
      width: 25%;
      font-weight: bold;
    }

    table thead{
      display: none;
    }
    a{
      margin: 2px;
    }
  }
</style>
@endsection
