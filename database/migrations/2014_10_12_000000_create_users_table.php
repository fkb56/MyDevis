<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->id();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('name_enterprise')->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('street_number', 4)->nullable();
			$table->string('street')->nullable();
			$table->string('city')->nullable();
			$table->string('post_code', 8)->nullable();
			$table->string('region', 50)->nullable();
			$table->string('country', 50)->nullable();
			$table->integer('capital')->nullable();
			$table->string('siret')->nullable();
			$table->string('code_ape', 50)->nullable();
			$table->string('email')->unique();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->rememberToken();
			$table->foreignId('current_team_id')->nullable();
			$table->string('profile_photo_path', 2048)->nullable();
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
		Schema::dropIfExists('users');
	}
}
