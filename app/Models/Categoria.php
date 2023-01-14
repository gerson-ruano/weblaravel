<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'slug',
        'seo_title',
        'seo_description',
        'seo_image',
        'name',
        'description',
        'image',
        'orden',
        'portada',
        'publicado'
    ];
    public function Subcategoria()
    {
        return $this->hasMany(Subcategoria::class);
        //Relacion de 1 categorias a muchos subcategoria
    }
}
