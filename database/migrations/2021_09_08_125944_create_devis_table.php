<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
			$table->integer('validity');
			$table->text('designation');
			$table->string('measure_unit', 10)->nullable();
			$table->float('quantity')->nullable();
			$table->float('unit_price');
			$table->string('condition_payment');
			$table->float('accompany');
			$table->float('ht_total');
			$table->float('tva');
			$table->float('ttc_total');
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
        Schema::dropIfExists('devis');
    }
}
