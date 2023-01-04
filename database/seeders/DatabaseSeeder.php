<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(CategorySeeder::class);
		$this->call(CivilitySeeder::class);
		$this->call(MeasureUnitSeeder::class);
		Product::factory(30)->create();
		Client::factory(30)->create();
		User::factory(1)->create();
	}
}
