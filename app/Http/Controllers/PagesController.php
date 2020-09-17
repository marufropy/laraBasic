<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome!';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'What Is This Site About';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'What Do We Provide',
            'services' => ['Personal Support', 'Official Support', 'Official Problem Fix', 'Environment Improvement', 'Anything Necessary']
        );
        return view('pages.services')->with($data);
    }
}
