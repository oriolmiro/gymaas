<?php

namespace Database\Seeders;

use App\Models\BodyPart;
use App\Models\Equipment;
use App\Models\Exercise;
use App\Models\Target;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://exercisedb.p.rapidapi.com/exercises?limit=1400', [
            'headers' => [
                'X-RapidAPI-Host' => 'exercisedb.p.rapidapi.com',
                'X-RapidAPI-Key' => $_ENV["API_KEY"],
            ],
        ]);
    
        $exercises = json_decode($response->getBody(), true);
            
        // Guarda tots els exercisis a la BD
        foreach ($exercises as $exercise) {
            $exercise_db = Exercise::create([
                'name' => $exercise['name'],
                'gif' => '',
                'secondary_muscles' => implode(',', $exercise['secondaryMuscles']),
                'instructions' => json_encode($exercise['instructions']),
                'lang' => 'en',
                'body_part_id' => BodyPart::where('name',$exercise['bodyPart'])->first()->id,
                'equipment_id' => Equipment::where('name',$exercise['equipment'])->first()->id,
                'target_id' => Target::where('name',$exercise['target'])->first()->id,
                'exercise_id' => 0
            ]);
    
            sleep(rand(1, 3));
            Storage::disk('local')->put($exercise_db->id.'.gif', file_get_contents($exercise['gifUrl']));
            $exercise_db->gif = $exercise_db->id.'.gif';
            $exercise_db->exercise_id = $exercise_db->id;
            $exercise_db->save();
            print("Exercici $exercise_db->id creat\n");
        }
    }
}
