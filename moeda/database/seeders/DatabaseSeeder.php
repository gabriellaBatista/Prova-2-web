<?php

namespace Database\Seeders;

use App\Models\Moeda;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Builder\Use_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       for ($i=0;$i<10;$i++) {
           User::factory()->create([

            'email' => 'user' . $i . '@email'
           ]);
        }
        $this->call ([
            MoedaSeeder::class

        ]);

    }
}
