<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'negocios';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
    public $timestamps = false;



}
