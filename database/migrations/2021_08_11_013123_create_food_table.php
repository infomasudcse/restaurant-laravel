<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
           /// $table->unsignedBigInteger('foodcategory_id');
            $table->double('price');
            $table->string('title');
            $table->text('short_description');
            $table->text('long_description');
            $table->text('image_path');    
            $table->timestamps();
            $table->index('title');
            $table->foreignId('foodcategory_id')->constrained('foodcategories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
}
