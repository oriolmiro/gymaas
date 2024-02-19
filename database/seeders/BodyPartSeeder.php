<?php

namespace Database\Seeders;

use App\Models\BodyPart;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodyPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new \GuzzleHttp\Client();

        // Demana a la api totes les body parts que hi han i les guarda a la seva taula
        $response = $client->request('GET', 'https://exercisedb.p.rapidapi.com/exercises/bodyPartList', [
            'headers' => [
                'X-RapidAPI-Host' => 'exercisedb.p.rapidapi.com',
                'X-RapidAPI-Key' => $_ENV["API_KEY"],
            ],
        ]);

        $body_parts = json_decode($response->getBody(), true);

        // Guarda totes les body_parts a la BD
        foreach ($body_parts as $body_part) {
            BodyPart::create(['name' => $body_part]);
        }
    }
}
