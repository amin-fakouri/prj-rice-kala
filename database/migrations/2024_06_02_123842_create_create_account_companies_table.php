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
        Schema::create('create_account_companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('phone_number');
            $table->string('password')->default('...');
            $table->string('name_company')->unique();
            $table->string('location_city');
            $table->string('location_work');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_account_companies');
    }
};
