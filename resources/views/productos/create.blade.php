@extends('layout.plantilla')

@section('content')
<h1>Crear producto</h1>

<form action="{{ route('productos.store') }}" method="POST">

    @csrf
    
<label>
    Nombre:
    
    <br>
    <input type="text" name="nombre">
</label>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="descripcion">
</label>
<br>

<label>
    precio:
    <br>
    <input type="number" name="precio">
</label>
<br>
<label>
    existencias:
    <br>
    <input type="number" name="existencias">
</label>
<br>
<label>
    proveedor:
    <br>
    <input type="text" name="proveedor">
</label>
<br><br>
<button type="submit">Enviar:</button>
</form>

@endsection