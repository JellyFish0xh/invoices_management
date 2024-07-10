<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollectionsTable extends Migration {

	public function up()
	{
		Schema::create('Collections', function(Blueprint $table) {
			$table->id()->autoIncrement();
			$table->timestamps();
			$table->bigInteger('customer_id')->unsigned();
			$table->float('amount');
			$table->date('collection_date');
			$table->enum('status', array('pending', 'completed'));
		});
	}

	public function down()
	{
		Schema::drop('Collections');
	}
}