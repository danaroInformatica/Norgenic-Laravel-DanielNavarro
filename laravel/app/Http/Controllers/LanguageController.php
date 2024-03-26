<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function cambiarIdioma($idioma)
    {
        if (in_array($idioma, ['es', 'en'])) {
            session()->put('locale', $idioma);
        }
        return redirect()->back();
    }
}
