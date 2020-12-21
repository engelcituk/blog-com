<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;



class PagesController extends Controller
{
    public function home(){

        return view('public.landing');
    } 

    public function blog(){

        $title = 'Todas las publicaciones';
        $posts = Post::publicados()->paginate(6);
        $categories = Category::all();
       
        return view('public.blog', compact('title','categories', 'posts'));
    }

    public function showPostsByCategories(Category $category){

        return view('public.blog',[
            'title'=> "Publicaciones de la categoría {$category->name} ",
            'posts' => $category->posts()->paginate(6),
            'categories' => Category::all(),
        ]);
    }

    public function showPostsByTag(Tag $tag){

        return view('public.blog',[
            'title'=> "Publicaciones de la etiqueta {$tag->name}",
            'posts' => $tag->posts()->paginate(4),
            'categories' => Category::all(),
        ]);
    }

    public function showPost(Post $post)
    {
        
        return view('public.post',compact('post'));
    }

    public function contact(){

        return view('public.contact');
    } 

    public function about(){

        return view('public.about');
    } 
}
