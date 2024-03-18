<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'UsuarioID';
    public $timestamps = false;
    protected $fillable = [ // -> Columnas a excepcion de las llaves foraneas y primaras
        'Nombre',
        'Correo',
        'Contraseña',
        'Rol',
        'Cedula',
        'Estado',
        'Fecha_Registro'
    ];
}
