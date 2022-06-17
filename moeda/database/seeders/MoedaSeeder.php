<?php

namespace Database\Seeders;

use App\Models\Moeda;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Builder\Use_;

class MoedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++){
            Moeda::factory()->create([
                'user_id'=> User::all()->random()->id 
            ]);
            
        }
    }
}
