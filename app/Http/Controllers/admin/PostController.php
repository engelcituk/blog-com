<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\StorePostRequest;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->authorize('create', new Post); 
        
        $this->validate($request,['title' => 'required|min:3']);
            
        $post = Post::create($request->all());
        /* en el modelo se sobreescribió el metodo create: public static function create, para crear url unicas
          */
       return redirect()->route('admin.posts.edit',compact('post'))->withFlash('El post se ha empezado a crear, continua agregandole más elementos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update',$post); //policie

        return view('admin.posts.edit',[
            'post'=> $post, 
            'tags' => Tag::all(),
            'categories'=> Category::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Post $post, StorePostRequest $request)
    {
        //return $request->all();

        $this->authorize('update',$post); // autorizacion para actualizar la publicacion 

        $post->update($request->all()); 
       
        //etiquetas, sincroniza o crea nuevas tags asociados al post
        $post->sincronizarTags($request->get('tags'));
 
        return redirect()->route('admin.posts.edit', $post)->with('flash', 'Tú publicación ha sido actualizada');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
