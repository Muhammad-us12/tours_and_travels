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
        Schema::create('destinationstios', function (Blueprint $table) {
            $table->id();
            $table->string('dest_name');
            $table->string('dest_img');
            $table->integer('dest_order');
            $table->string('country');
            $table->boolean('display_on_web')->default(1);
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
        Schema::dropIfExists('destinationstios');
    }
};
