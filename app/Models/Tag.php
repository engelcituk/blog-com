<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    //
    public function getRouteKeyName()
    {
        return 'url'; // le pongo url porque es lo que necesito para filtrar post por categorias
    }
    // un tag pertenece a muchos posts
    public function posts(){

        return $this->belongsToMany(Post::class);
    }
    // mutador
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['url'] = str_slug($name);
    }
}
