<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("name", 120);
            $table->string("gif", 100);
            $table->string("secondary_muscles", 190);
            $table->json("instructions");
            $table->string("lang", 3);

            $table->foreignId("body_part_id");
            $table->foreignId("equipment_id");
            $table->foreignId("target_id");

            $table->timestamps();
        });

        Schema::table('exercises', function (Blueprint $table) {
            $table->foreignId("exercise_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
