<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Editorial;

class EditorialController extends Controller
{
    //
    public function index(){
      // Muestra el listado de Editoriales
        $editoriales = Editorial::all();
        return view('editorial.listado', ['editoriales' => $editoriales]);
    }

    public function form_registro(){
      // Muestra el formulario de registro
          $ciudades = ['Bogotá', 'Cúcuta', 'Cartagena','Cali','Medellín'];
          return view('editorial.registrar', ['ciudades' => $ciudades]);
      }
  
      public function registrar(Request $request){
      // Realizar el proceso de registro
          $e = new Editorial();
          $e->nombre = $request->input('nombre');
          $e->direccion = $request->input('direccion');
          $e->ciudad = $request->input('ciudad'); 
          $e->telefono = $request->input('telefono');   
          $e->save();
          return redirect()->route('listado_editoriales');
      }
  
      public function form_actualiza($id){
       // Muestra el formulario de actualizacion
          $editorial = Editorial::findOrFail($id); 
          $ciudades = ['Bogotá', 'Cúcuta', 'Cartagena','Cali','Medellín'];
          return view('editorial.actualizar', compact('editorial', 'ciudades')); 
      }
  
      public function actualizar(Request $request, $id){
        // Realizar el proceso de actualizacion 
          $e = Editorial::findOrFail($id);
          $e->nombre = $request->input('nombre');
          $e->direccion = $request->input('direccion');
          $e->ciudad = $request->input('ciudad'); 
          $e->telefono = $request->input('telefono');
          $e->save();
          return redirect()->route('listado_editoriales');
      }

}
