<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('food_id');
            $table->string('food_name');
            $table->string('food_image', 100);
            $table->integer('food_price');
            $table->enum('food_status',['ada','habis']);
            $table->enum('type',['makanan','minuman']);
            $table->unsignedBigInteger('home_id')->index();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
