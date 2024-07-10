<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	public function up()
	{
		Schema::create('Customers', function(Blueprint $table) {
			$table->id()->autoIncrement();
			$table->string('name');
			$table->string('contact_details');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Customers');
	}
}