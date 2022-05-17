<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexAdmin()
    {
        return view('_AdminPage.dashboard.main',[
            "title" => "Dashboard",
            "subtitle1" => "Dashboard",
            "subtitle2" => ""

        ]);
    }

    public function indexHRD()
    {
        return view('_HRDPage.dashboard.main',[
            "title" => "Dashboard",
            "subtitle1" => "Dashboard",
            "subtitle2" => ""

        ]);
    }

    public function checkDoc()
    {
        return view('_HRDPage.dashboard.confirmDoc',[
            // "title" => "Dashboard",
            // "subtitle1" => "Dashboard",
            // "subtitle2" => ""

        ]);
    }
}
