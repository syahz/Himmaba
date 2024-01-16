<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index() {
        $data = Article::take(3)->get();
        return view('LandingPage.pages.index',['data' => $data]);
    }

    public function article() {
        $data = Article::latest()->paginate(5);
        return view('LandingPage.pages.article',compact('data'));
    }

    public function detailarticle($slug) {
        $data = Article::where('slug',$slug)->firstOrFail();
        return view('LandingPage.pages.detailarticle')->with([
            'data' => $data
        ]);
    }
    
}
