<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuppliersTable extends Migration {

	public function up()
	{
		Schema::create('Suppliers', function(Blueprint $table) {
			$table->increments('id', true);
			$table->string('name');
			$table->string('contact_details');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Suppliers');
	}
}