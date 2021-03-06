<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servings', function (Blueprint $table) {
            $table->unique(['number', 'version']);
            $table->id();
            $table->integer('number');
            $table->char('version')->nullable();
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('category_id');
            $table->double('price', 6, 2);
            $table->unsignedBigInteger('offer_id')->nullable();
            $table->smallInteger('spice')->nullable();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
            $table->foreign('offer_id')
                ->references('id')
                ->on('offers');
        });

        Schema::create('allergen_serving', function (Blueprint $table) {
            $table->primary(['allergen_id', 'serving_id']);
            $table->unsignedBigInteger('allergen_id');
            $table->unsignedBigInteger('serving_id');

            $table->foreign('allergen_id')
                ->references('id')
                ->on('allergens')
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
        Schema::dropIfExists('servings');
        Schema::dropIfExists('allergen_serving');
    }
}
