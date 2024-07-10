<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Products', function(Blueprint $table) {
			$table->foreign('stock_id')->references('id')->on('Stocks')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('Products', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Bills', function(Blueprint $table) {
			$table->foreign('customer_id')->references('id')->on('Customers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Bills', function(Blueprint $table) {
			$table->foreign('supplier_id')->references('id')->on('Suppliers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Bills', function(Blueprint $table) {
			$table->foreign('stock_id')->references('id')->on('Stocks')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Bill_Product', function(Blueprint $table) {
			$table->foreign('bill_id')->references('id')->on('Bills')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Bill_Product', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('Products')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Payments', function(Blueprint $table) {
			$table->foreign('supplier_id')->references('id')->on('Suppliers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Collections', function(Blueprint $table) {
			$table->foreign('customer_id')->references('id')->on('Customers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Products', function(Blueprint $table) {
			$table->dropForeign('Products_stock_id_foreign');
		});
		Schema::table('Products', function(Blueprint $table) {
			$table->dropForeign('Products_category_id_foreign');
		});
		Schema::table('Bills', function(Blueprint $table) {
			$table->dropForeign('Bills_customer_id_foreign');
		});
		Schema::table('Bills', function(Blueprint $table) {
			$table->dropForeign('Bills_supplier_id_foreign');
		});
		Schema::table('Bills', function(Blueprint $table) {
			$table->dropForeign('Bills_stock_id_foreign');
		});
		Schema::table('Bill_Product', function(Blueprint $table) {
			$table->dropForeign('Bill_Product_bill_id_foreign');
		});
		Schema::table('Bill_Product', function(Blueprint $table) {
			$table->dropForeign('Bill_Product_product_id_foreign');
		});
		Schema::table('Payments', function(Blueprint $table) {
			$table->dropForeign('Payments_supplier_id_foreign');
		});
		Schema::table('Collections', function(Blueprint $table) {
			$table->dropForeign('Collections_customer_id_foreign');
		});
	}
}
