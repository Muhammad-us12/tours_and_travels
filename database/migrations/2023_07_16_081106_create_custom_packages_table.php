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
        Schema::create('custom_packages', function (Blueprint $table) {
            $table->id();
            $table->integer('group_size');
            $table->date('start_date');
            $table->integer('duration');
            $table->string('destinations',3000);
            $table->string('lead_name');
            $table->string('lead_email');
            $table->string('lead_phone');
            $table->string('lead_country');
            $table->string('message');
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
        Schema::dropIfExists('custom_packages');
    }
};
