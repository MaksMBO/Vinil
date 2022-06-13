<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('turntables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->binary('mainPhoto');
            $table->string('brend', 70);
            $table->string('subText', 300);
            $table->integer('price');
            $table->binary('secondPhoto');
            $table->binary('thirdPhoto');
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
        Schema::dropIfExists('turntables');
    }
};
