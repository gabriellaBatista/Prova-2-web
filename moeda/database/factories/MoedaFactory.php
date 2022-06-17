<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Moeda>
 */
class MoedaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pais' => $this ->faker->country(),
            'nomedamoeda' => $this ->faker->randomElements([
                'real',
                'dolar',
                'euro'
            ]),
            'valor' => $this ->faker->randomFloat(),
            'ano' => $this ->faker->year('m/Y')
            
        
        ];
    }
}
