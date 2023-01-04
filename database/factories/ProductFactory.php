<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\MeasureUnit;
use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Product::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 * @throws Exception
	 */
	public final function definition(): array
	{
		return [
			'name' => 'Outils n°' . $this->faker->unique()->numerify('##'),
			'quantity' => $this->faker->numerify('##'),
			'reference' => $this->faker->unique()->numerify('##') . ' ' . $this->faker->unique()->numerify('###') . ' ' . $this->faker->unique()->numerify('###') . ' ' . $this->faker->unique()->numerify('###') . ' ' . $this->faker->unique()->numerify('##'),
			'category_id' => Category::all()->random()->id,
			'measure_unit_id' => MeasureUnit::all()->random()->id,
			'buying_price' => random_int(10, 400),
			'selling_price' => random_int(30, 800)
		];
	}
}
