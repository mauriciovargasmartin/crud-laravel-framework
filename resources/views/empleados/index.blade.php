@extends('layouts.app')
@section('content')
<div class="container">



@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif



<a href="{{ url('empleados/create') }}">Registrar nuevo USUARIO-VEHICULO</a>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Foto de vehiculo</th>
            <th>Nombre usuario</th>
            <th>Descripcion vehiculo</th>
            <th>Marca vehiculo</th>
            <th>Correo de usuario</th>
            <th>Acciones</th>

        </tr>
    </thead>



    <tbody>
@foreach($empleado as $empleado)

        <tr>
            <td>{{ $empleado->id }}</td>
            <td>

               <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">

            </td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->ApellidoPaterno}}</td>
            <td>{{ $empleado->ApellidoMaterno}}</td>
            <td>{{ $empleado->Correo}}</td>
            <td>

                <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}">
                        Editar

                </a>



                |

            <form action="{{ url('/empleados/'.$empleado->id)}}" method='post'>
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('quieres borrar?')"
            value="borrar">



            </form>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
