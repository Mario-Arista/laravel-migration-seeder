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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Aggiungo colonna per codice treno
            $table->string('train_code', 30);

            // Aggiungo le colonne per azienda e stazione
            $table->string('company', 100);
            $table->string('starting_station', 100);

            // Aggiungo la colonna per la data di partenza
            $table->date('date')->format('Y-m-d');

            // Aggiungo colonne per l'ora di partenza e arrivo
            $table->time('departure_time')->format('H:i');
            $table->time('arrival_time')->format('H:i');

            // Aggiungo colonna per numero carrozze
            $table->tinyInteger('number_of_carriages')->unsigned();

            $table->boolean('on_time');
            $table->boolean('on_delay');
            $table->boolean('cancelled');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
