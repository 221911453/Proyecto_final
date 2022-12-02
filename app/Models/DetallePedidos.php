<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedidos extends Model
{
    use HasFactory;
    protected $table = 'tb_detallepedidos';
    //protected $primaryKey = 'id';
    protected $fillable = [
    'id_producto',
    'id_pedido',
    'cantidad',
    'total',
    'created_at',
    'updated_at'
    ];
}
