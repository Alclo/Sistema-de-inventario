@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('admin')}}">Regresar</a>
<h1>Ediatar Empleado</h1>
<label for="id_rol">Rol</label>
        <input type="text" name="id_rol" value="{{$usuarios->id_rol}}" id="Rol">
        <br>
    <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="{{$usuarios->Nombre}}" id="Nombre">
        <br>
    <label for="Apellido_p">Apellido Paterno</label>
        <input type="text" name="Apellido_p" value="{{$usuarios->Apellido_p}}" id="Apellido_p">
        <br>
    <label for="Apellido_m">Apellido Materno</label>
        <input type="text" name="Apellido_m" value="{{$usuarios->Apellido_m}}" id="Apellido_m">
        <br>
    <label for="Correo_elec">Correo Electronico</label>
        <input type="text" name="Correo_elec" value="{{$usuarios->Correo_elec}}" id="Correo_elec">
        <br>
        <label for="Password">Contraseña</label>
        <input type="password" name="Password" value="{{$usuarios->Password}}" id="Password">
        <br>
    <label for="Numero_telefonico">Numero de telefono</label>
        <input type="number" name="Numero_telefonico" value="{{$usuarios->Numero_telefonico}}" id="Numero_telefonico">
        <br>
    <label for="Direccion">Direccion</label>
        <input type="text" name="Direccion" value="{{$usuarios->Direccion}}" id="Direccion">
        <br>
    <label for="Foto">Fotografia</label>
        {{$usuarios->Foto}}
        <img src="{{ asset('storage').'/'.$usuarios->Foto}}" width="100" alt="">
        <input type="file" name="Foto" value="" id="Foto">
        <br>
        <input type="submit" value="Editar">
        </div>
        @endsection