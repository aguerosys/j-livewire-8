<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Course extends Model
{
    use HasFactory;

    use Sluggable;

    protected $fillable = ['name','description','user_id','category_id', 'image'];

    

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
            ]
        ];
    }



    public function user(){

        return $this->belongsTo(User::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function getGetExcerptAttribute(){

        return substr($this->description,0,80). "...";

    }

    // funcion lacual busca cursos similares, donde (where) el ID de la categoria sea igual a la
    // encontrada y donde el usuario sea el dueño, y con take mostramos 2 y con get lo ejecutamos
    public function similar(){

        //
        return $this->where('category_id', $this->category_id)->with('user')->take(2)->get();
    }

   

    
}
