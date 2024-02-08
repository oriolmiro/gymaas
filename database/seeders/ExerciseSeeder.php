<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://exercisedb.p.rapidapi.com/exercises?limit=10', [
            'headers' => [
                'X-RapidAPI-Host' => 'exercisedb.p.rapidapi.com',
                'X-RapidAPI-Key' => $_ENV["API_KEY"],
            ],
        ]);

        $exercises = json_decode($response->getBody(), true);
        
        // Guarda tots els exercisis a la BD
        foreach ($exercises as $exercise) {
            Exercise::create([
                'name' => $exercise['name'],
                'gif' => $exercise['gifUrl'],
                'secondary_muscles' => $exercise['secondaryMuscles'],
                'instructions' => $exercise['instructions'],
                'lang' => 'en',
            ]);
        }
    }
}
