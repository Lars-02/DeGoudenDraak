<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssaginedServerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assagined_server', function (Blueprint $table) {
            $table->primary(['table_id', 'user_id']);
            $table->unsignedBigInteger('table_id');
            $table->unsignedBigInteger('user_id');

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
        Schema::dropIfExists('assagined_server');
    }
}
