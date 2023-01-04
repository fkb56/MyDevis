<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CivilitySeeder extends Seeder
{
	/**
	 * section Ajout nom civilité à la base de donnée
	 *
	 * @var array|string[]
	 */
	static array $civilities = [
		['name_min' => 'Mr', 'name_full' => 'Monsieur'],
		['name_min' => 'Mme', 'name_full' => 'Madame'],
		['name_min' => 'Mlle', 'name_full' => 'Mademoiselle'],
		['name_min' => 'Pr', 'name_full' => 'Professeur'],
		['name_min' => 'Me', 'name_full' => 'Maître']
	];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		foreach (self::$civilities as $civility) {
			DB::table('civilities')->insert([
				'name' => $civility,
			]);
		}
	}
}
