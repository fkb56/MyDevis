<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
	static array $categories = [
		['name' => 'Outils'],
		['name' => 'Tapisserie'],
		['name' => 'Sols'],
		['name' => 'Murs'],
		['name' => 'Location'],
	];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		foreach (self::$categories as $category) {
			DB::table('categories')->insert([
				'name' => $category,
			]);
		}
	}
}
