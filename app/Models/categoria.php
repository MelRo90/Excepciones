<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\usuario;

class categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';  

    public $timestaps = false;

    protected $fillable = [
        'id_categoria',
        'descripcion'
    ];

    protected $primarykey = 'id_categoria';

    public function rel_alumno(){
        return $this->hasMany(usuario::class,fk_id_categoria);
    }
}
