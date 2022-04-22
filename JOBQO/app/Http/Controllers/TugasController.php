<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function pertama(){
        return view('tugas.profile');
    }

    public function kedua(){
        return view('tugas.formWizard');
    }
}
