<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartingQuantitiesTable extends Migration {

	public function up()
	{
		Schema::create('Starting_quantities', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('product_id')->unsigned();
			$table->bigInteger('stock_id')->unsigned();
			$table->bigInteger('quantity');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Starting_quantities');
	}
}
