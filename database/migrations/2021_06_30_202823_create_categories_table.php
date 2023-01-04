<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public final function up():void
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->id();
			$table->string('name', 70)->unique();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public final function down():void
	{
		Schema::dropIfExists('categories');
	}
}
