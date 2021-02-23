@extends('main')

@section('contenido')

<div class="container">
<h1> Actualizar Editorial </h1>
    <form action="{{ route('actualizarEditorial', $editorial->id) }}" method="POST">
        @csrf
       
        <label for="nombre">Nombre </label>
        <input type="text" id='nombre' name='nombre' class="form-control" required value="{{$editorial->nombre}}"> <br> 

        <label for="direccion"> Direccion </label>
        <input type="text" id='direccion' name='direccion' class="form-control" required value="{{$editorial->direccion}}"> <br> 

        <label for="telefono"> Telefono </label>
        <input type="text" id='telefono' name='telefono' class="form-control" required value="{{$editorial->telefono}}"> <br> 

        <label for="ciudad"> Ciudad </label> <br>
        
        <select class="form-select" aria-label="Default select example" name="ciudad">
            @foreach($ciudades as $c)
                <option value="{{$c}}" > {{$c}} </option>
            @endforeach
		</select>
        
        <br> <br>   
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('listado_editoriales')}}" class="btn btn-danger"> Cancelar </a>
    </form>

@stop