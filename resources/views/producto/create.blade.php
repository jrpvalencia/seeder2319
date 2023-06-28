

@extends('layout.plantilla')

@section('content')
    
    <h1>Pedido</h1>

<form action="{{ route('producto.store') }}" method="POST">

    @csrf
  <label>
    nombre
    <br>
    <input type="text" name="nombre">
</label>
<br> <br>
<label>
  descripcion
    <br>
    <input type="text" name="descripcion">
</label>
<br><br>
<label>
  precio
  <br>
  <input type="number" name="precio">
</label>
<br> <br>
<label>
  existencias
  <br>
  <input type="number" name="existencias">
</label>
<br> <br>
<label>
  proveedor
  <br>
  <input type="text" name="proveedor">
</label>
<br> <br>
<button type="submit">Enviar formulario</button>
</form>

@endsection