<?php

namespace Database\Seeders;

use App\Models\curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new curso();

        $curso->name = 'laravel';
        $curso->descripcion = 'el mejor curso';
        $curso->categoria = 'desarrollo de software';

        $curso->save();
    }
}
