<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->text('code', 65535);
			$table->text('name', 65535);
			$table->text('volume', 65535);
			$table->text('notice', 65535)->nullable();
			$table->text('image_s', 65535);
			$table->text('description', 65535)->nullable();
			$table->integer('price');
			$table->integer('stock');
			$table->integer('category_id');
			$table->integer('shipping_weight')->default(1);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
