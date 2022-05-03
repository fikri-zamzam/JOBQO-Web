<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.main',[
            "title" => "Dashboard",
            "subtitle1" => "Dashboard",
            "subtitle2" => ""

        ]);
    }
}
