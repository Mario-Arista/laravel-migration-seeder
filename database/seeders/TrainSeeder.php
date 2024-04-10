<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo Faker
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // array di 50 treni
        for($i = 0; $i < 50; $i++) {

            // creo righe della classe Train
            $newTrain = new Train();
            
            // metto dentro le righe cose casuali con Fake
            $newTrain->train_code = $faker->numerify('train-######');
            $newTrain->company = $faker->word();
            $newTrain->starting_station = $faker->city();
            $newTrain->date = $faker->dateTimeInInterval('-1 week', '+4 weeks')->format('Y-m-d');
            $newTrain->departure_time = $faker->time('H:i');
            $newTrain->arrival_time = $faker->time('H:i');
            $newTrain->number_of_carriages = $faker->numberBetween(10, 20);
            $newTrain->on_time = $faker->boolean();
            $newTrain->on_delay = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->price = $faker->randomFloat(2, 10, 200);

            // salvo la riga 
            $newTrain->save();
        }
    }
}
