<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            for ($i = 0; $i < 100; $i++)
            {
                $newTrain = new Train();
                $newTrain->azienda = $faker->domainWord();
                $newTrain->stazione_di_partenza = $faker->country();
                $newTrain->stazione_di_arrivo = $faker->country();
                $newTrain->orario_di_partenza = $faker->time();
                $newTrain->orario_di_arrivo = $faker->time();
                $newTrain->data_partenza = $faker->date();
                $newTrain->codice_treno= $faker->regexify('[A-Z]{2}[0-4]{3}');
                $newTrain->numero_carrozze = $faker->numberBetween(0, 20);
                $newTrain->in_orario = $faker->boolean();
                $newTrain->cancellato = $faker->boolean();
                $newTrain->save();
            }
    }
}
