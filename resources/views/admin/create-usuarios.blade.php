@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('admin')}}">Regresar</a>
<h1>Registar Empleado</h1>
<form action="{{ url('/admin')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="id_rol">Rol</label>
    <input type="text" name="id_rol"  id="Rol">
    <br>
<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre"  id="Nombre">
    <br>
<label for="Apellido_p">Apellido Paterno</label>
    <input type="text" name="Apellido_p" id="Apellido_p">
    <br>
<label for="Apellido_m">Apellido Materno</label>
    <input type="text" name="Apellido_m"  id="Apellido_m">
    <br>
<label for="Correo_elec">Correo Electronico</label>
    <input type="text" name="Correo_elec" id="Correo_elec">
    <br>
    <label for="Password">Contraseña</label>
    <input type="password" name="Password"  id="Password">
    <br>
<label for="Numero_telefonico">Numero de telefono</label>
    <input type="number" name="Numero_telefonico"  id="Numero_telefonico">
    <br>
<label for="Direccion">Direccion</label>
    <input type="text" name="Direccion" id="Direccion">
    <br>
<label for="Foto">Fotografia</label>

    <input type="file" name="Foto" id="Foto">
    <br>
    <input type="submit" value="Registrar">
    
</form>
</div>
@endsection