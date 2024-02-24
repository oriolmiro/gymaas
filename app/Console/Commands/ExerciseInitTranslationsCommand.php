<?php

namespace App\Console\Commands;

use App\Http\Controllers\ExerciseController;
use Illuminate\Console\Command;

class ExerciseInitTranslationsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:exercise-init-translations-command';

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
        $exerciseController->initTranslation();
    }
}
