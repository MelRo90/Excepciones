<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\alumno;

class seeder_alumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumno = new alumno();
        $alumno->carne='0909 19 10171';
        $alumno->nombre='Melvin Roberto Belteton';
        $alumno->alias='Melro';
        $alumno->foto='foto mia';
        $alumno->correo='mbeltetono2@miumg.edu.gt';
        $alumno->fecha_nacimiento='2001-11-06';
        $alumno->telefono='42164287';
        $alumno->fk_id_categoria='1';
        $alumno->save();

        alumno::factory(10)->create();
    }
}
