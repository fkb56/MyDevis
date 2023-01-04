<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RelationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// section relation categories -> products
		Schema::table('products', function(Blueprint $table) {
			$table->foreignId('category_id')
				->constrained('categories');
		});

		// section relation products -> measure_unit
		Schema::table('products', function(Blueprint $table) {
			$table->foreignId('measure_unit_id')
				->constrained('measure_units');
		});

		// section relation users -> civilities
		Schema::table('users', function(Blueprint $table) {
			$table->foreignId('civility_id')
				->constrained('civilities');
		});

		// section relation clients -> civilities
		Schema::table('clients', function(Blueprint $table) {
			$table->foreignId('civility_id')
				->constrained('civilities');
		});

		// section relation devis -> users && clients
		Schema::table('devis', function(Blueprint $table) {
			$table->foreignId('user_id')
				->constrained('users');

			$table->foreignId('client_id')
				->references('id')
				->on('clients');
		});

		// section relation factures -> users && clients
		Schema::table('factures', function(Blueprint $table) {
			$table->foreignId('user_id')
				->constrained('users');

			$table->foreignId('client_id')
				->constrained('clients');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
}
