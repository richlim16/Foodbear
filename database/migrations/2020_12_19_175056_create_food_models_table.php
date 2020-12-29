<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_models', function (Blueprint $table) {
            $table->id();
            $table->string('foodName');
            $table->float('price');
            $table->text('description');
            $table->string('foodPic')->nullable();
            $table->timestamps();
        });
        DB::table('food_models')->insert(
          array(
            'foodName' => 'Coffee',
            'price' => 5000,
            'description' => 'For some midnight fuel',
            'foodPic' => 'coffee.jpg'
          )
        );
        DB::table('food_models')->insert(
          array(
            'foodName' => 'Onigiri',
            'price' => 100,
            'description' => 'Some korean rice shit',
            'foodPic' => 'onigiri.jpg'
          )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_models');
    }
}
