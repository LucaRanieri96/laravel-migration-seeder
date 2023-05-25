<?php

namespace Database\Seeders;

use App\Models\Trains;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Trains();
            $train->azienda = $faker->randomElement(['Trenitalia', 'Italo']);

            $train->stazione_partenza = $faker->randomElement(['Firenze', 'Arezzo', 'Grosseto', 'Livorno', 'Lucca', 'Massa-Carrara', 'Pisa', 'Pistoia', 'Prato', 'Siena']);
            $stazionePartenza = $train->stazione_partenza;
            $stazioneArrivo = $faker->randomElement(['Firenze', 'Arezzo', 'Grosseto', 'Livorno', 'Lucca', 'Massa-Carrara', 'Pisa', 'Pistoia', 'Prato', 'Siena']);
            while ($stazionePartenza == $stazioneArrivo) {
                $stazioneArrivo = $faker->randomElement(['Firenze', 'Arezzo', 'Grosseto', 'Livorno', 'Lucca', 'Massa-Carrara', 'Pisa', 'Pistoia', 'Prato', 'Siena']);
            }
            $train->stazione_arrivo = $stazioneArrivo;

            $train->orario_partenza = $faker->time();
            $orarioPartenza = $train->orario_partenza;

            $orarioDiArrivo = $faker->time();
            while ($orarioPartenza > $orarioDiArrivo) {
                $orarioDiArrivo = $faker->time();
            }
            $train->orario_arrivo = $orarioDiArrivo;
            
            $train->codice_treno = $faker->numberBetween(10000, 99999);
            $train->numero_carrozze = $faker->numberBetween(6, 25);
            
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
