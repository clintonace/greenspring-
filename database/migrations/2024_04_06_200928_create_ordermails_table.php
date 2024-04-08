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
        Schema::create('ordermails', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->double('amount');
            $table->longText('location');
            $table->string('phone');
            $table->string('email');
            $table->string('quantity');
            $table->string('status');
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
        Schema::dropIfExists('ordermails');
    }
};
