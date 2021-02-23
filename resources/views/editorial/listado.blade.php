@extends('main')

@section('contenido')
<div align="center">
    <h3> Listado de Editoriales <h3>
    <div align="right">
        <a href="{{route('registrarEditorial')}}" class="btn btn-success">Registrar </a>
    </div>
</div>
<table class="table table-striped">
    <thead class="blue white-text">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre </th>
            <th scope="col">Direccion </th>
            <th scope="col">Ciudad </th>
            <th scope="col">Telefono </th>
            <th scope="col">Opciones </th>
        </tr>
    </thead>
    <tbody>
    @foreach($editoriales as $e)
            <tr>
                <td> {{ $e->id }} </td>
                <td> {{ $e->nombre }} </td>
                <td> {{ $e->direccion }}</td>
                <td> {{ $e->ciudad }}</td>
                <td> {{ $e->telefono }}</td>                  
                <td> <a href="{{route('formEditorial',$e->id)}}" class="btn btn-primary">Actualizar</a></td>
            </tr>
    @endforeach
    </tbody>
</table>

<br> <br>
@stop