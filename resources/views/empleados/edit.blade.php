@extends('layouts.app')
@section('content')
<div class="container">



<form action="{{ url('/empleados/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
    
@csrf

{{ method_field('PATCH') }}
    @include('empleados.form',['modo'=>'Editar'])


</form>

<style>
.titulo {color: brown};

</style>
<br>
<br>
<form action="">
    <div class="caja1">
        
        <h2 class="titulo">Control de tiempo AutosColombia</h2>
        <label for="ingreso" >Hora ingreso de usuario</label>
        <input type="text" class="form-control" name="ingreso" style="width : 100px; heigth : 500px">
        <label for="ingreso">Hora salida de usuario</label>
        <input type="text" class="form-control" name="ingreso" style="width : 100px; heigth : 100px">
        <label for="ingreso">Tiempo total</label>
        <input type="text" class="form-control" name="ingreso" style="width : 100px; heigth : 100px">
        <label for="ingreso">Costo total</label>
        <input type="text" class="form-control" name="ingreso" style="width : 100px; heigth : 200px">
        <label for="ingreso">Observaciones</label>
        <input type="text" class="form-control" name="ingreso" style="width : 200px; heigth : 200px">
        <br>
        <button>generar factura</button>
    </div>
</form>


</div>
@endsection

