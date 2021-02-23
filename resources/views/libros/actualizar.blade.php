@extends('main')

@section('contenido')

<div class="container">
<h1> Actualizar Libros </h1>
    <form action="{{ route('actualizar', $libro->id) }}" method="POST">
        @csrf
       
        <label for="ISBN">ISBN </label>
        <input type="text" id='ISBN' name='ISBN' class="form-control" required value='{{$libro->ISBN}}'> <br> 

        <label for="titulo"> Titulo </label>
        <input type="text" id='titulo' name='titulo' class="form-control" required value="{{$libro->titulo}}"> <br> 

        <label for="precio">Precio </label>
        <input type="number" id='precio' name='precio' class="form-control" required value="{{$libro->precio}}"> <br> 

        <label for="editorial"> Editorial </label> <br>
        <select class="form-select" aria-label="Default select example" name="editorial">
            @foreach($editoriales as $e)
                <option value="{{$e->id}}" > {{$e->nombre}} </option>
            @endforeach
		</select>
        <br> <br>   
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('listado_libros')}}" class="btn btn-danger"> Cancelar </a>
    </form>

@stop
