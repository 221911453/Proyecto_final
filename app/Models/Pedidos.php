<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $table = 'tb_pedidos';
    //protected $primaryKey = 'id';
    protected $fillable = [
   'id_usuario',
   'created_at',
   'updated_at'
    ];
}
