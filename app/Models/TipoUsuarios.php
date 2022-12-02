<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuarios extends Model
{
    use HasFactory;
    protected $table = 'tb_tipousuarios';
    //protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'created_at'
    ];
}
