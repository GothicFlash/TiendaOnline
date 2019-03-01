<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailsales', function (Blueprint $table) {
          $table->integer('sale_id')->unsigned();
          $table->integer('product_id')->unsigned();
          $table->decimal('price',10);
          $table->integer('quantity');
          $table->foreign('sale_id')->references('id')->on('sales');
          $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailsales');
    }
}
