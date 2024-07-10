<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillsTable extends Migration {

	public function up()
	{
		Schema::create('Bills', function(Blueprint $table) {
			$table->id()->autoIncrement();
			$table->bigInteger('customer_id')->unsigned()->nullable();
			$table->bigInteger('supplier_id')->unsigned()->nullable();
			$table->bigInteger('stock_id')->unsigned();
			$table->float('total');
			$table->enum('type', array('paid', 'postpaid'));
			$table->enum('bill_for', array('purchase', 'sale'));
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Bills');
	}
}