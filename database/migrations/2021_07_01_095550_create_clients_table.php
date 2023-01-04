<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->id();
			$table->string('first_name', 25);
			$table->string('last_name', 25);
			$table->string('phone', 20);
			$table->string('street_number', 4);
			$table->string('street');
			$table->string('city');
			$table->string('post_code', 8);
			$table->string('region', 50)->nullable();
			$table->string('country', 50)->nullable();
			$table->string('email');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('clients');
	}
}
