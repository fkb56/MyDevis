<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
			$table->string('designation');
			$table->string('measure_unit', 10)->nullable();
			$table->float('quantity')->nullable();
			$table->float('unit_price');
			$table->string('payment');
			$table->float('ht_total');
			$table->float('tva');
			$table->float('ttc_total');
			$table->float('total_remaining');
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
        Schema::dropIfExists('factures');
    }
}
