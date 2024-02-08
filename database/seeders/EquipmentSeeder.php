<?php

namespace Database\Seeders;

use App\Models\Equipment;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new \GuzzleHttp\Client();

        // Demana a la api tots els equipments que hi han
        $response = $client->request('GET', 'https://exercisedb.p.rapidapi.com/exercises/equipmentList', [
            'headers' => [
                'X-RapidAPI-Host' => 'exercisedb.p.rapidapi.com',
                'X-RapidAPI-Key' => $_ENV["API_KEY"],
            ],
        ]);

        $equipments = json_decode($response->getBody(), true);

        // Guarda tots els equipments a la BD
        foreach ($equipments as $equipment) {
            Equipment::create(['name' => $equipment]);
        }
    }
}
