<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Faker $faker)
	{
		for ($i = 0; $i <= 10; $i++) {
			$train = new Train();

			$train->azienda = $faker->word();
			$train->stazione_partenza = $faker->word();
			$train->stazione_arrivo = $faker->word();
			$train->orario_partenza = $faker->time('H:i');
			$train->orario_arrivo = $faker->time('H:i');
			$train->codice_treno = $faker->lexify('ct-????');
			$train->numero_carrozze = $faker->randomNumber(2, true);
			$train->in_orario = $faker->randomElement([true, false]);
			$train->cancellato = $faker->randomElement([true, false]);

			$train->save();
		}
	}
}
