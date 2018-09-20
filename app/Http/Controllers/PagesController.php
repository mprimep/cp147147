<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function projects(){
        $title = "projects space";
        return view('pages.projects')->with('title',$title);
    }
}
