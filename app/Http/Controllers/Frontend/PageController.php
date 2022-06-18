<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Travelblog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $travelblogs=Travelblog::all();
        return view('frontend.pages.home', compact('travelblogs'));
    }

    public function blogdetail($id){
        $travelblogs=Travelblog::find($id);
        return view('frontend.pages.blog', compact('travelblogs'));
    }
}
