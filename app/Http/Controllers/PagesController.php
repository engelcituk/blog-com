<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PagesController extends Controller
{
    public function home(){

        return view('public.landing');
    } 

    public function blog(){

        $posts = Post::publicados()->paginate(4);
        
        $categories = Category::all();
       
        return view('public.blog', compact('categories', 'posts'));
    }

    public function contact(){

        return view('public.contact');
    } 

    public function about(){

        return view('public.about');
    } 
}
