<?php

namespace App\Http\Controllers\public_site;

use App\Http\Controllers\Controller;
use App\Models\Faq;
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
        $allFaq = Faq::all();
        return view('_PekerjaPage.pages.faq',[
            'isLogin' => ((Auth::check()) ? "true" : "false")
        ],compact('allFaq'));
    }

    public function faqSearch(Request $request){
        $nameFAQ = $request->cari;

        $allFaq = Faq::where('soal','LIKE',"%".$nameFAQ."%")->get();
        return view('_PekerjaPage.pages.faq',[
            'isLogin' => ((Auth::check()) ? "true" : "false")
        ],compact('allFaq'));
    }
}
