<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobles', function (Blueprint $table) {
            $table->id();
            $table->string('nameperson');
            $table->string('numberperson');
            $table->string('typedev');
            $table->string('colordev');
            $table->string('typedisply');
            $table->string('priscall');
            $table->string('stutstype');
            $table->string('cassdev');
            $table->string('namegiv');
            $table->string('timegiv');
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
        Schema::dropIfExists('mobles');
    }
}
