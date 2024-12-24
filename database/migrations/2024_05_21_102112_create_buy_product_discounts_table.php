<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buy_product_discounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->string('buy_code')->unique();
            $table->foreignId('user_created_product');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('phone_number_user');
            $table->string('your_location');
            $table->string('name_product');
            $table->string('name_company');
            $table->string('code_product');
            $table->string('vazn')->default('...');
            $table->string('price');
            $table->string('discount');
            $table->string('result_discount');
            $table->string('time_send');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_product_discounts');
    }
};
