<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasureUnitSeeder extends Seeder
{
	/**
	 * section Ajout unité de mesure à la base de donnée
	 *
	 * @var array|string[]
	 */
	static array $prestations = [
		['min' => 'm²', 'max' => 'mètre carré'],
		['min' => 'm³', 'max' => 'mètre cube'],
		['min' => 'l', 'max' => 'litre',],
		['min' => 'kg', 'max' => 'kilogramme',],
		['min' => 'g', 'max' => 'gramme',],
		['min' => 'pcs', 'max' => 'pièces',],
		['min' => 'h', 'max' => 'heure',],
		['min' => 'jrs', 'max' => 'jours',]
	];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		foreach (self::$prestations as $prestation) {
			DB::table('measure_units')->insert([
				'name_min' => $prestation['min'],
				'name_full' => $prestation['max'],
			]);
		}
	}
}
