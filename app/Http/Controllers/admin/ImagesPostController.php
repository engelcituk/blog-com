<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Post;
use App\models\Image;

class ImagesPostController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), [
            'image' => 'required|image|max:2048'
        ]);
        // guardo la imagen en storage/posts y a la vez hago el registro en la DB
        $post->images()->create([ 'url' => request()->file('image')->store('posts','public') ]); 
        /* guardo la imagen en la tabla relacionada polimorfica */
    }
    
    public function destroy(Request $request)
    {
        $id = $request->get('idImage'); //recibo por ajax

        $image = Image::find($id); //busco la foto
        $image->delete();// la borro de la db, cada que se borra una foto en la db con eloquement en el modelo se borra la img

        return response()->json(['mensaje'=>'Folo eliminada']);

    }
}
