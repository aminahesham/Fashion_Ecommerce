<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakeupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makeup', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('price')->nullable();
            $table->integer('no')->nullable();
            $table->string('photo')->nullable();
            $table->string('brand_name')->nullable();
            $table->integer('offer')->nullable();
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
        Schema::dropIfExists('makeup');
    }
}
