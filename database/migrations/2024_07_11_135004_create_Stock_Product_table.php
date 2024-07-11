<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockProductTable extends Migration {

	public function up()
	{
		Schema::create('Stock_Product', function(Blueprint $table) {
			$table->id()->autoIncrement();
			$table->bigInteger('product_id')->unsigned();
			$table->bigInteger('stock_id')->unsigned();
            $table->bigInteger('Base_Quantity')->nullable();
            $table->bigInteger('Quantity_purchased')->nullable();
            $table->bigInteger('Quantity_sold')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Stock_Product');
	}
}
