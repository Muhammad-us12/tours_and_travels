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
        Schema::create('packages_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name',300);
            $table->integer('customer_id');
            $table->integer('package_id');
            $table->string('invoice_no');
            $table->integer('adults');
            $table->integer('childs');
            $table->float('total_price');
            $table->text('cart_data');
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
        Schema::dropIfExists('packages_bookings');
    }
};
