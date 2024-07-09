<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('Products', function(Blueprint $table) {
			$table->increments('id', true);
			$table->integer('stock_id')->unsigned();
			$table->integer('supplier_id')->unsigned();
			$table->string('name');
			$table->string('quantity');
			$table->float('price');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Products');
	}
}