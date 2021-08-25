<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
            [
                "name"=>"Coding Class 1"
            ],
            [
                "name"=>"Coding Class 2"
            ],
            [
                "name"=>"Coding Class 3"
            ],
            [
                "name"=>"Coding Class 4"
            ],
            [
                "name"=>"Coding Class 5"
            ],
            [
                "name"=>"Coding Class 6"
            ],
            [
                "name"=>"Coding Class 7"
            ],
            [
                "name"=>"Coding Class 8"
            ],
            [
                "name"=>"Coding Class 9"
            ],
            [
                "name"=>"Coding Class 10"
            ]
        ]);
    }
}
