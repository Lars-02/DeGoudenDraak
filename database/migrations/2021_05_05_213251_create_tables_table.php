<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->integer('seats');
        });

        Schema::create('table_user', function (Blueprint $table) {
            $table->unique(['table_id', 'user_id', 'start_time']);
            $table->id();
            $table->unsignedBigInteger('table_id');
            $table->unsignedBigInteger('user_id');
            $table->time('start_time');
            $table->time('duration');
            $table->integer('guests');
            $table->boolean('help_request');

            $table->foreign('table_id')
                ->references('id')
                ->on('tables')
                ->cascadeOnDelete();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('tables');
    }
}
