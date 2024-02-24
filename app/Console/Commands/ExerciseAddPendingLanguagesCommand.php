<?php

namespace App\Console\Commands;

use App\Http\Controllers\ExerciseController;
use Illuminate\Console\Command;

class ExerciseAddPendingLanguagesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:exercise-add-pending-languages-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $exerciseController = new ExerciseController();
        $exerciseController->addPendingLanguagesToExercises();
    }
}
