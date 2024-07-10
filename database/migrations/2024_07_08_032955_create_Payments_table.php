<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	public function up()
	{
		Schema::create('Payments', function(Blueprint $table) {
			$table->id()->autoIncrement();
			$table->bigInteger('supplier_id')->unsigned();
			$table->float('amount');
			$table->date('payment_date');
			$table->enum('status', array('pending', 'completed'));
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Payments');
	}
}