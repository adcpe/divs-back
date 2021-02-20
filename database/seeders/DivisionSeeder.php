<?php

namespace Database\Seeders;

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
            'name' => 'HOCHSCHILD MINING',
            'level' => 1,
            'employees' => rand(1,100),
            'children' => rand(0,2),
            'ambassador' => rand(1,100),
        ]);
    }
}
