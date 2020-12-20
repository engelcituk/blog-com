<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //use HasFactory;
    use SoftDeletes; //para usar softdeletes
    // use HasFactory;	    // use HasFactory;
    protected $hidden = ['created_at', 'updated_at']; //oculto los timestamps del modelo
    protected static $relations_to_cascade = ['posts'];

    public function getRouteKeyName()
    {
        return 'url'; // le pongo url porque es lo que necesito para filtrar post por categorias
    }

    // una categoria tiene muchos posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // mutador
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['url'] = str_slug($name);
    }

}
