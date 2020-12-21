<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pid');
            $table->string('productName');
            $table->integer('price');
            $table->string('productDescription');
            $table->string('productType');
            $table->integer('quantity');
            $table->string('CustomerName');
            $table->string('phone');
            $table->string('email');
            $table->text('address');
            $table->string('status')->default('Not Confirm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
