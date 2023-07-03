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
        Schema::create('booking_customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name',300);
            $table->float('balance');
            $table->string('email',300)->unique();
            $table->string('phone',300);
            $table->string('address',3000);
            $table->string('country',300);
            $table->string('zip',30);
            $table->string('gender',300);
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
        Schema::dropIfExists('booking_customers');
    }
};
