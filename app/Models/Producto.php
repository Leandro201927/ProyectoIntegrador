<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'Producto';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'UsuarioID',
        'Nombre',
        'Precio'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID', 'UsuarioID');
    }
}
