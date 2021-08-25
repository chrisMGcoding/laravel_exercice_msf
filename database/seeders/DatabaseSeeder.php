<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Eleve::factory(50)->create();

        $this->call([
            BatimentSeeder::class,
            FormationSeeder::class,
            TypeformationSeeder::class
        ]);
    }
}
