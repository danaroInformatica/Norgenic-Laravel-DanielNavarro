<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

  // Método para mostrar el formulario
  public function showForm()
  {
    return view('contacto'); 
  }

  // Método para procesar el envío
  public function processForm(Request $request)
  {
     // Validar datos
    $validated = $request->validate([
        'email' => ['required', 'string', 'email','max:255'],
        'message' => ['required', 'string','min:1', 'max:1024'],
    ]);

    return redirect()->back()->with('success', '¡Formulario enviado correctamente!'); 
  }

}
