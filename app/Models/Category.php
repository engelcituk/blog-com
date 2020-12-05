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
    protected static $relations_to_cascade = ['invoices'];

    // una categoria tiene muchos posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
