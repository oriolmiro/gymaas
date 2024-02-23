<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            'iso_code' => Str::of('ES'),
            'name' => Str::of('Castellano'),
        ]);

        DB::table('languages')->insert([
            'iso_code' => Str::of('CA'),
            'name' => Str::of('Catalán'),
        ]);

        DB::table('languages')->insert([
            'iso_code' => Str::of('EN'),
            'name' => Str::of('Inglés'),
        ]);

        DB::table('languages')->insert([
            'iso_code' => Str::of('IT'),
            'name' => Str::of('Italiano'),
        ]);
    }
}
