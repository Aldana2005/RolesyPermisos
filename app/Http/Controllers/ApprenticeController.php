<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apprentice; 

class ApprenticeController extends Controller
{
    public function index(){ /* Muestra la lista de aprendices registrados */
        $apprentices = Apprentice::all();  /* all -> (todos) me trae todos los registros asociados al model (tabla apprentices)  */
        $title = 'Aprendices'; 
        /* $data= ['title'=>'Calculadora', 'apprentices' => $apprentices];
        return view('apprentice.index', $data); */
        return view('apprentice.index', compact('apprentices','title')); /* compact permite enviar variables desde el controlador a la vista demanera directa */ 
    }

    public function create(){ /* Muestra la vista donde está el formulario de registro de aprendiz */
        $title = 'Registro de aprendiz'; 
        return view('apprentice.create', compact('title')); 
    }

    public function store(Request $request){ /* Se procesar la información eviada desde el formulario para registrar un aprendiz */

        $validated = $request->validate([
            'name' => 'required',
            'city' => 'required',
        ]);

        $a = new Apprentice; /* Instancia del modelo Aprendiz (Espacio para guardar información) */
        $a->name = $request->input('name');
        $a->document_number = $request->input('document_number');
        $a->city =$request->input('city');
        $a->email = $request->input('email');
        $a->telephone = $request->input('telephone');
        $a->save(); /* Guardar informacion en la tabla  */
        
        if ($a->save()) {
            return redirect(route('apprentice.index'));
        }
        
    }
    public function getapprenticedit($id){

        $a = Apprentice:: findOrFail($id);
        $data=['apprentice'=> $a, 'title'=>'Editar'];
        return view('apprentice.edit',$data);

        if ($a->save()) {
            return redirect(route('apprentice.index'));
        }
    }
    public function postapprenticeedit(Request $request , $id){

        $a = Apprentice:: findOrFail($id);
        $a->name = $request->input('name');
        $a->document_number = $request->input('document_number');
        $a->city =$request->input('city');
        $a->email = $request->input('email');
        $a->telephone = $request->input('telephone');/* Guardar informacion en la tabla  */
        if ($a->save()) {
            $apprentices = Apprentice::get();
            $data=['apprentice'=> $a, 'title'=>'Editar','apprentices'=>$apprentices];
            return view('apprentice.index',$data);
        }
        
    }
    public function getapprenticedelete($id){

        $a = Apprentice:: findOrFail($id);
        $a->delete();
        $apprentices = Apprentice::get();
        $data=['apprentice'=> $a, 'title'=>'Editar','apprentices'=>$apprentices];
        return view('apprentice.index',$data);
        }
        
    }
