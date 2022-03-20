<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categoria;
use App\Models\alumno;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // categoria::factory(10)->create();
        $this->call(seeder_categoria::class);
        $this->call(seeder_alumno::class);
    }
}
