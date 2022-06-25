<?php

namespace App\Http\Controllers\public_site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function learn_more(){
        return view('_PekerjaPage.pages.coming-soon',[
            'isLogin' => ((Auth::check()) ? "true" : "false")
        ]);
    }

    public function faqPage(){
        $data = [
            [
                'Bagaimana HRD dapat mendaftar kan perusahaan ?',
                'HRD dapat mendaftarkan perusahaan dengan mengirimkan email kepada admin jobqo, lalu admin akan memberikan username dan password untuk login ke aplikasi jobqo'
            ],
            [
                'ini soal 2 bang',
                'jawaban 2 bang'
            ]
        ];

        // dd($data);
        return view('_PekerjaPage.pages.faq',[
            'isLogin' => ((Auth::check()) ? "true" : "false")
        ],compact('data'));
    }
}
