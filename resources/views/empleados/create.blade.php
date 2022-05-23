@extends('layouts.app')
@section('content')
<div class="container">



<form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">  # nos permite que podamos enviar fotos o archivos POST# 
@csrf 

@include('empleados.form',['modo'=>'Crear']);

</form>

</div>

@endsection
