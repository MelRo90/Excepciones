<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
    protected $table = 'alumno';  

    protected $fillable = [
        'carne',
        'nombre',
        'alias',
        'foto',
        'correo',
        'fecha_nacimiento',
        'telefono',
        'fk_id_categoria'
    ];

    protected $primarykey = 'carne';

    public function rel_pais(){
        return $this->hasOne(categoria::class);
    }
}
