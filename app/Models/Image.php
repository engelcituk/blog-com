<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];
    
    //sobreescribimos el metodo estatico
    protected static function boot()
    {
        parent::boot();
        // cuando se este eliminando una foto vaya al disco y borre una foto
        static::deleting( function($image){
            Storage::disk('public')->delete($image->url); // la borro de la carpeta storage/posts

        });
    }
    public function imageable() {

        return $this->morpTo();
    }
}
