<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Division;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            'name' => 'CEO',
            'level' => 1,
            'employees' => rand(1,5),
            'subdivisions' => 3,
            'ambassador' => User::find(rand(1,100))->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Dirección General',
            'level' => 2,
            'employees' => rand(1,5),
            'subdivisions' => 5,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'CEO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Estrategia',
            'level' => 3,
            'employees' => rand(2,10),
            'subdivisions' => 0,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'Dirección General',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Crecimiento',
            'level' => 3,
            'employees' => rand(2,10),
            'subdivisions' => 0,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'Dirección General',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Finanzas',
            'level' => 3,
            'employees' => rand(2,10),
            'subdivisions' => 0,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'Dirección General',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Producto',
            'level' => 3,
            'employees' => rand(2,10),
            'subdivisions' => 2,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'Dirección General',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Operaciones',
            'level' => 3,
            'employees' => rand(2,10),
            'subdivisions' => 3,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'Dirección General',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Gestión de Riesgos',
            'level' => 4,
            'employees' => rand(10,30),
            'subdivisions' => 0,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'Operaciones',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Innovación',
            'level' => 4,
            'employees' => rand(10,30),
            'subdivisions' => 0,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'Producto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Logística',
            'level' => 4,
            'employees' => rand(10,30),
            'subdivisions' => 0,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'Operaciones',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Tecnologías de la Información',
            'level' => 4,
            'employees' => rand(10,30),
            'subdivisions' => 0,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'Operaciones',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Publicidad',
            'level' => 4,
            'employees' => rand(10,30),
            'subdivisions' => 0,
            'ambassador' => User::find(rand(1,100))->name,
            'parent_division' => 'Producto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
