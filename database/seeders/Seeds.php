<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Seeds extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('create_account_companies')->insert([
            'user_id' => 0,
            'f_name' => 0,
            'l_name' => 0,
            'phone_number' => 0,
            'password' => 0,
            'name_company' => 0,
            'location_city' => 0,
            'location_work' => 0,
        ]);

        DB::table('buy_product_discounts')->insert([
            'product_id' => 0,
            'user_id' => 0,
            'buy_code' => 0,
            'user_created_product' => 0,
            'f_name' => 0,
            'l_name' => 0,
            'phone_number_user' => 0,
            'your_location' => 0,
            'name_product' => 0,
            'name_company' => 0,
            'code_product' => 0,
            'price' => 0,
            'discount' => 0,
            'result_discount' => 0,
            'time_send' => 0
        ]);

        DB::table('buy_products')->insert([
            'product_id' => 0,
            'user_id' => 0,
            'buy_code' => 0,
            'user_created_product' => 0,
            'f_name' => 0,
            'l_name' => 0,
            'phone_number_user' => 0,
            'your_location' => 0,
            'name_product' => 0,
            'name_company' => 0,
            'code_product' => 0,
            'price' => 0,
            'time_send' => 0
        ]);
    }
}
