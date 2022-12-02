<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Usuarios extends Model
{
    use Notifiable;
    use HasFactory;
    protected $table = 'tb_usuarios';
    protected $fillable = [
            'nombre',
            'app',
            'apm',
            'fecha',
            'direccion',
            'telefono1',
            'telefono2',
            'email',
            'pass',
            'id_tipousuario',
            'created_at'

    ];
}
