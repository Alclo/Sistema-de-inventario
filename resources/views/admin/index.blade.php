@extends('layouts.app')

@section('content')
<div class="container">

@if (Session::has('mensaje')){{Session::get('mensaje')}}
     
 @endif
<a href="{{url('admin/create') }}" class="btn btn-success">Registrar nuevo</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Id de Personal</th>
            <th>Rol</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo Electronico</th>
            <th>Numero Telefonico</th>
            <th>Direccion</th>
            <th>Fotografia</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuarios)
        <tr>
            <td>{{$usuarios->id}}</td>
            <td>{{$usuarios->id_rol}}</td>
            <td>{{$usuarios->Nombre}}</td>
            <td>{{$usuarios->Apellido_p}}</td>
            <td>{{$usuarios->Apellido_m}}</td>
            <td>{{$usuarios->Correo_elec}}</td>
            <td>{{$usuarios->Numero_telefonico}}</td>
            <td>{{$usuarios->Direccion}}</td>
            <td>
            <img  class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$usuarios->Foto}}" width="100" alt="">
            </td>
            <td>
                <a href="{{ url('/admin/'.$usuarios->id.'/edit')}}" class="btn btn-warning">
                        Editar
                </a>
                
                
            
                <form action="{{url('/admin/'.$usuarios->id)}}" class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('Estas seguro de eliminar este usuario?')" value="Borrar">
                </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection