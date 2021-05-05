<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('table_id');
            $table->timestamps();

            $table->foreign('table_id')
                ->references('id')
                ->on('tables')
                ->cascadeOnDelete();
        });

        Schema::create('order_serving', function (Blueprint $table) {
            $table->primary(['order_id', 'serving_id']);
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('serving_id');
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->cascadeOnDelete();
            $table->foreign('serving_id')
                ->references('id')
                ->on('servings')
                ->cascadeOnDelete();
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
        Schema::dropIfExists('order_serving');
    }
}
