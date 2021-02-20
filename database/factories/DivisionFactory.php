<?php

namespace Database\Factories;

use App\Models\Division;
use Illuminate\Database\Eloquent\Factories\Factory;

class DivisionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Division::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $names = [
            'HOCHSCHILD MINING',
            'Dirección General',
            'Finanzas',
            'Producto',
            'Gestión de Riesgos',
            'Operaciones',
            'Innovación',
            'Producto',
            'Logística',
            'TI',
            'Publicidad',
        ];

        return [
            'name' => array_rand($names, 1)->unique(),
            'level' => 1,
            'employees' => rand(1,100),
            'childen' => rand(0,2),
            'ambassador' => rand(1,100),
        ];
    }
}
