<?php

namespace Database\Factories;

use App\Models\Civility;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Client::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition(): array
	{
		$name = $this->faker->unique()->firstName($gender = 'male' | 'female');
		$last_name = $this->faker->unique()->lastName();

		return [
			'civility_id' => Civility::all()->random()->id,
			'first_name' => $name,
			'last_name' => $last_name,
			'phone' => $this->faker->unique()->mobileNumber(),
			'street_number' => $this->faker->unique()->buildingNumber(),
			'street' => $this->faker->unique()->streetName(),
			'city' => $this->faker->city(),
			'post_code' => $this->faker->unique()->postcode(),
			'region' => $this->faker->unique()->region(),
			'country' => $this->faker->unique()->departmentName(),
			'email' => strtolower($name) . '.' . strtolower($last_name) . '@mydevis.fr'
		];
	}
}
