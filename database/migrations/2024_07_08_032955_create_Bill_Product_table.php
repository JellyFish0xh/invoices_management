<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillProductTable extends Migration {

	public function up()
	{
		Schema::create('Bill_Product', function(Blueprint $table) {
			$table->id()->autoIncrement();
			$table->bigInteger('bill_id')->unsigned();
			$table->bigInteger('product_id')->unsigned();
			$table->integer('quantity');
			$table->string('price');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Bill_Product');
	}
}