<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\categoria;

class seeder_categoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new categoria();
        $categoria->descripcion='aa';
        $categoria->save();

        categoria::factory(10)->create();
    }
}
