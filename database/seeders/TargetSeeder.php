<?php

namespace Database\Seeders;

use App\Models\Target;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new \GuzzleHttp\Client();

        // Demana a la api tots els targets que hi han i els guarda a la seva taula
        $response = $client->request('GET', 'https://exercisedb.p.rapidapi.com/exercises/targetList', [
            'headers' => [
                'X-RapidAPI-Host' => 'exercisedb.p.rapidapi.com',
                'X-RapidAPI-Key' => $_ENV["API_KEY"],
            ],
        ]);

        $targets = json_decode($response->getBody(), true);

        // Guarda tots els targets a la BD
        foreach ($targets as $target) {
            Target::create(['name' => $target]);
        }
    }
}
