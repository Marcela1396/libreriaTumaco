<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editorial;
 
class LibroController extends Controller
{
    //
    public function index(){
    // Muestra el listado de libros (stock)
        $libros = Libro::all();   
        return view('libros.listado', ['libros' => $libros]);
    }

    public function form_registro(){
    // Muestra el formulario de registro
        $editoriales = Editorial::all();  
        return view('libros.registrar', compact('editoriales'));
    }

    public function registrar(Request $request){
    // Realizar el proceso de registro
        $book = new Libro();
        $book->ISBN = $request->input('ISBN');
        $book->titulo = $request->input('titulo');
        $book->precio = $request->input('precio'); 
        $book->editorial_fk = $request->input('editorial');
        $book->save();
        return redirect()->route('listado_libros');
    }

    public function form_actualiza($id){
     // Muestra el formulario de actualizacion
        $libro = Libro::findOrFail($id);
        $editoriales = Editorial::all();  
        return view('libros.actualizar', compact('libro','editoriales')); 
    }

    public function actualizar(Request $request, $id){
      // Realizar el proceso de actualizacion 
        $book = Libro::findOrFail($id);
        $book->ISBN = $request->input('ISBN');
        $book->titulo = $request->input('titulo');
        $book->precio = $request->input('precio');  
        $book->editorial_fk = $request->input('editorial');
        $book->save();
        return redirect()->route('listado_libros');
    }
}
