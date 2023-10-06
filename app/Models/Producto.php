<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'precio', 'negocio_id'];
    public $timestamps = false;


    //Siempre apunta a la otra tabla  (Producto->Negocio y viceversa)  
    //return $this->hasOne(Negocio::class, 'id', 'negocio_id');
    //lave foranea siempre es el id de la otra tabla y local_key es negocio_id en en la tabla del modelo en el que esta

    public function productos(): HasOne
    {
        return $this->hasOne(Negocio::class, 'id', 'negocio_id');
    }



  

}
