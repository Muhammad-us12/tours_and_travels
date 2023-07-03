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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('activity_title');
            $table->string('feacture_img');
            $table->string('baaner_img')->nullable();
            $table->string('language')->nullable();
            $table->integer('group_size');
            $table->integer('stars_rating');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('activity_duration');
            $table->integer('country');
            $table->integer('destination');
            $table->string('activity_palce_address',3000);
            $table->longText('facilities')->nullable();
            $table->longText('description')->nullable();
            $table->longText('included')->nullable();
            $table->longText('excluded')->nullable();
            $table->string('availibilty_days',3000);
            $table->integer('adult_cost_price');
            $table->integer('adult_sale_price');
            $table->integer('child_cost_price');
            $table->integer('child_sale_price');
            $table->string('Payment_instructions')->nullable();
            $table->string('cancelation_policy')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('activities');
    }
};
