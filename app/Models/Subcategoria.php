<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =[
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
        'publicado',
        'categoria_id'
    ];
    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
        //Relacion de muchas subcategoria a 1 categoria
    }
    public function productos()
    {
        return $this->hasMany(Producto::class);
        //Relacion de 1 subcategorias a muchos productos
    }
}
