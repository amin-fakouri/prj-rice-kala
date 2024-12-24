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
        Schema::create('create_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('pic_url');
            $table->string('item_kesht');
            $table->string('name_pro');
            $table->string('code_pro');
            $table->string('vazn')->default('...');
            $table->string('price');
            $table->string('time_create_product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_products');
    }
};
