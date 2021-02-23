@extends('main')

@section('contenido')

<div align="center">
    <h3> Listado de Libros <h3>
    <div align="right">
        <a href="{{route('formularioRegLibro')}}" class="btn btn-success">Registrar </a>
    </div>
</div>
<br> 
<table class="table table-striped">
    <thead class="blue white-text">
        <tr>
            <th scope="col">#</th>
            <th scope="col">ISBN </th>
            <th scope="col">Titulo </th>
            <th scope="col">Editorial </th>
            <th scope="col">Precio </th>
            <th scope="col">Descuento </th>
            <th scope="col"> Opciones </th>
        </tr>
    </thead>
    <tbody>
    @foreach($libros as $l)
            <tr>
                <td> {{ $l->id }} </td>
                <td> {{ $l->ISBN }} </td>
                <td> {{ $l->titulo }}</td>                
                <td> {{$l->publisher->nombre}} </td>
                <td> {{ $l->precio }}</td>

                @if($l->editorial_fk == 1 ||  $l->editorial_fk == 5)
                    @php
                        $descuento = $l->precio * 0.10;
                    @endphp
                    
                @else
                    @php
                        $descuento = 0;
                    @endphp
                @endif

                <td> {{ $descuento }} </td>
                    
                <td> <a href="{{route('formularioAct',$l->id)}}" class="btn btn-primary">Actualizar</a></td>
            </tr>
    @endforeach
    </tbody>
</table>


@stop