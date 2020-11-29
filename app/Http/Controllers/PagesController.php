<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blog(){

        return view('public.blog');
    } 

    public function contact(){

        return view('public.contact');
    } 

    public function about(){

        return view('public.about');
    } 
}
