<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_ApplicationController extends Controller
{
    public function index(){
        return view('_AdminPage.lamaran.index');
    }
}
