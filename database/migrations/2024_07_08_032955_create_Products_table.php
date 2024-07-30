<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('Products', function(Blueprint $table) {
			$table->id()->autoIncrement();
			$table->bigInteger('category_id')->unsigned();
			$table->string('name');
			$table->float('buy_price');
			$table->float('sell_price');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Products');
	}
}
