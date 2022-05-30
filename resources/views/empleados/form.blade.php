Este formulario que tendra los datos del producto

<h1>{{ $modo }} producto</h1>
<br>
<label for="Nombre">Producto</label>
<input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
<br>


<label for="ApellidoPaterno">Descripcion</label>
<input type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}" id="ApellidoPaterno">
<br>


<label for="ApellidoMaterno">Marca</label>
<input type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}" id="ApellidoMaterno">
<br>


<label for="Correo">Correo de vendedor</label>
<input type="text" name ="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id ="Correo">
<br>

<label for="Foto">Foto de producto</label>

@if(isset($empleado->Foto))

<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">

@endif

<input type="file" name ="Foto" value="" id ="Foto">
<br>


<input type="submit" value="{{ $modo }} datos">

<a href="{{ url('empleados/') }}">Regresar</a>

<br>
