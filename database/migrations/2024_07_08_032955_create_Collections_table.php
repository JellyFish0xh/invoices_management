<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollectionsTable extends Migration {

	public function up()
	{
		Schema::create('Collections', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->integer('customer_id')->unsigned();
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