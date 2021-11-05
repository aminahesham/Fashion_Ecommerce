<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantss', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('price')->nullable();
            $table->string('photo')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('size')->nullable();
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
        Schema::dropIfExists('pantss');
    }
}