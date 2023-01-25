<?php

namespace Database\Seeders;
use App\Models\materia;
use Illuminate\Database\Seeder;

class MateriaSender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        materia::factory(50)->create();
    }
}
