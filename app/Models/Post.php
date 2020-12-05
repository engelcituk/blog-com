<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use  SoftDeletes;

    //definimos los unicos campos que se pueden asignar masivamente, esto es usado en el update del controlador de posts
    protected $fillable = [
        'title', 'body','iframe','excerpt','published_at','category_id', 'user_id'
    ];

    protected $dates = ['published_at']; // para que el campo de la tabla published_at sea tratado como una instancia de carbon, para que lo considere como una fecha

    /*En esta matriz almacenamos los nombres o las relaciones de los métodos que deseamos eliminar (o restaurar) cuando SoftDelete ocurre*/
    protected static $relations_to_cascade = ['tags']; 
    //sobreescribimos el metodo estatico
    protected static function boot()
    {
        parent::boot();
        // cuando se este eliminando una publicacion se borra en la db sus tags y en storage/posts se borran las imgs del post
        static::deleting( function($post){
            $post->tags()->detach(); // se quita sus tags
            $post->photos->each(function($photo){ // se borra cada foto en la carpeta
                $photo->delete();
            });
        });
        //al restaurar un post, por cascade restauro tambien sus relaciones 
        static::restoring(function($post) {
            foreach (static::$relations_to_cascade as $relation) {
                foreach ($post->{$relation}()->get() as $item) {
                    $item->withTrashed()->restore();
                }
            }
        });
    }

    //getRouteKeyName model bindind para regresar un post por su url y no por id
    public function getRouteKeyName()
    {
        return 'url';
    }
    //un post pertenene a una sola categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //un post pertenece a muchos tags
    public function tags(){

        return $this->belongsToMany(Tag::class);
    }
    
    public function photos(){

        return $this->morphMany(Photo::class, 'photoable');
    }
    
    public function user() // el dueño del post, un post le pertenece a un solo usuario
    {
        return $this->belongsTo(User::class);
    }
   
    // queryScope
    public function scopePublicados($query){

        $query->whereNotNull('published_at') //obtengo las publicaciones donde fecha de pub. no sean nulos
              ->where('published_at','<=', Carbon::now()) //donde fechapub sean menores o igual a hoy
              ->latest('published_at'); //ordenados por fecha de publicacion
                    //get ya no se ocupa porque se usaría en otro lado
  }
    // mutador para indicar si la publicacion tiene fecha de publicacion o es nula  
    public function setPublishedAtAttribute($published_at)
    {
        $this->attributes['published_at']= $published_at ? Carbon::createFromFormat('d/m/Y', $published_at) : null;
    }

    // mutador para seleccionar la categoria o agregarle una categoria nueva 
    public function setCategoryIdAttribute($category)
    {
        $this->attributes['category_id'] = Category::find($category)
                                        ? $category
                                        : Category::create(['name'=> $category])->id;
    }

    //metodo que sincroniza los tags, hace la logica de sincronizar los tagsId o crear nuevos para ese post
    public function sincronizarTags($tags)
    {
        $tagIds = collect($tags)->map( function($tag){
            return Tag::find($tag) ? $tag : Tag::create(['name'=> $tag])->id;
        });
        return $this->tags()->sync($tagIds);
    }

    //sobreescribo el metodo estatico create para evitar duplicar post y sus url
    public static function create(array $attributes=[] ){

        $attributes['user_id']=auth()->id();  // id del usuario es igual al user_id logueado      

        $post = static::query()->create($attributes);

        $post->generateUrl();

        return $post;
    }
    public function generateUrl(){

        $url= str_slug($this->title);

        if($this->whereUrl($url)->exists()){

            $url  = "{$url}-{$this->id}";
        }
        $this->url = $url;

        $this->save();

    }
    // query scopes
    public function scopePostsPermitidosParaVer($query)
    {
        if ( auth()->user()->can('view', $this)) 
        { 
            return $query; // si el usuario logueado tiene rol admin retorno todos los posts
        }
        return $query->where('user_id',auth()->id()); //sino muestro solo los posts del usuario logueado
        
    }

}
