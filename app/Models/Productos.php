<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'tb_productos';
    //protected $primaryKey = 'id';
    protected $fillable = [
   'nombre',
   'foto',
   'descripcion',
   'costo',
   'color',
   'medida',
   'material',
   'created_at'
    ];
}
