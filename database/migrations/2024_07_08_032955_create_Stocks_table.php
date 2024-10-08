<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStocksTable extends Migration {

	public function up()
	{
		Schema::create('Stocks', function(Blueprint $table) {
			$table->id()->autoIncrement();
			$table->string('name');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Stocks');
	}
}