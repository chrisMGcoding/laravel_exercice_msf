<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                "name"=>"art",
                "description"=>"obligatoire"
            ],
            [
                "name"=>"bâtiment",
                "description"=>"très physique"
            ],
            [
                "name"=>"langue",
                "description"=>"polyglotte"
            ],
            [
                "name"=>"comptable",
                "description"=>"chiant"
            ],
            [
                "name"=>"IT",
                "description"=>"le futur"
            ],
            [
                "name"=>"sécurité",
                "description"=>"thug life"
            ],
        ]);
    }
}
