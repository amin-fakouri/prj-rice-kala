<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateProduct extends Controller
{

    public $pic_url;
    public $price;
    public $item_kesht;

    public $discount;
    public $result_discount;
    public $discount_step_1;
    public $discount_step_2;
    public $search_company;
    public $companys;
    // For Open Modal
    public $modal_page = 0;

    // For See Image Product
    public $page_image = 0;

    public $alert = 0;

    public $buy_products;
    public $buy_products_discount;

    public function create()
    {

        notify()->success('Laravel Notify is awesome!');


        if ($this->pic_url == 1){
            if ($this->discount == 0){
                DB::table('create_products')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'item_kesht' => $this->item_kesht,
                    'name_pro' => 'برنج طارم',
                    'code_pro' => rand(1000, 9999),
                    'price' => $this->price,
                    'time_create_product' => jdate('y/m/d'),
                ]);

            }else{
                $this->discount_step_1 = ($this->price * $this->discount) / 100;
                $this->discount_step_2 = $this->discount_step_1 / 100;
                $take_result_discount = $this->price - $this->discount_step_2 ;
                DB::table('create_product_with_discounts')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'name_pro' => 'برنج طارم',
                    'item_kesht' => $this->item_kesht,
                    'code_pro' => rand(1000, 9999),
                    'discount' => $this->discount,
                    'price' => $this->price,
                    'result_discount' => $take_result_discount,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }



        }elseif ($this->pic_url == 2){
            if ($this->discount == 0){
                DB::table('create_products')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'item_kesht' => $this->item_kesht,
                    'name_pro' => 'برنج هاشمی',
                    'code_pro' => rand(1000, 9999),
                    'price' => $this->price,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }else{
                $this->discount_step_1 = ($this->price * $this->discount);
                $this->discount_step_2 = $this->discount_step_1 / 100;
                $take_result_discount = $this->price - $this->discount_step_2;
                DB::table('create_product_with_discounts')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'name_pro' => 'برنج هاشمی',
                    'item_kesht' => $this->item_kesht,
                    'code_pro' => rand(1000, 9999),
                    'discount' => $this->discount,
                    'price' => $this->price,
                    'result_discount' => $take_result_discount,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }
        }elseif ($this->pic_url == 3){
            if ($this->discount == 0){
                DB::table('create_products')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'item_kesht' => $this->item_kesht,
                    'name_pro' => 'برنج علی کاظمی',
                    'code_pro' => rand(1000, 9999),
                    'price' => $this->price,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }else{
                $this->discount_step_1 = ($this->price * $this->discount);
                $this->discount_step_2 = $this->discount_step_1 / 100;
                $take_result_discount = $this->price - $this->discount_step_2;
                DB::table('create_product_with_discounts')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'name_pro' => 'برنج علی کاظمی',
                    'item_kesht' => $this->item_kesht,
                    'code_pro' => rand(1000, 9999),
                    'discount' => $this->discount,
                    'price' => $this->price,
                    'result_discount' => $take_result_discount,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }
        }elseif ($this->pic_url == 4){
            if ($this->discount == 0){
                DB::table('create_products')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'item_kesht' => $this->item_kesht,
                    'name_pro' => 'برنج عنبر بو',
                    'code_pro' => rand(1000, 9999),
                    'price' => $this->price,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }else{
                $this->discount_step_1 = ($this->price * $this->discount);
                $this->discount_step_2 = $this->discount_step_1 / 100;
                $take_result_discount = $this->price - $this->discount_step_2;
                DB::table('create_product_with_discounts')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'name_pro' => 'برنج عنبر بو',
                    'item_kesht' => $this->item_kesht,
                    'code_pro' => rand(1000, 9999),
                    'discount' => $this->discount,
                    'price' => $this->price,
                    'result_discount' => $take_result_discount,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }
        }elseif ($this->pic_url == 5){
            if ($this->discount == 0){
                DB::table('create_products')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'item_kesht' => $this->item_kesht,
                    'name_pro' => 'برنج چمپا',
                    'code_pro' => rand(1000, 9999),
                    'price' => $this->price,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }else{
                $this->discount_step_1 = ($this->price * $this->discount);
                $this->discount_step_2 = $this->discount_step_1 / 100;
                $take_result_discount = $this->price - $this->discount_step_2;
                DB::table('create_product_with_discounts')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'name_pro' => 'برنج چمپا',
                    'item_kesht' => $this->item_kesht,
                    'code_pro' => rand(1000, 9999),
                    'discount' => $this->discount,
                    'price' => $this->price,
                    'result_discount' => $take_result_discount,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }
        }elseif ($this->pic_url == 6){
            if ($this->discount == 0){
                DB::table('create_products')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'item_kesht' => $this->item_kesht,
                    'name_pro' => 'برنج فجر',
                    'code_pro' => rand(1000, 9999),
                    'price' => $this->price,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }else{
                $this->discount_step_1 = ($this->price * $this->discount);
                $this->discount_step_2 = $this->discount_step_1 / 100;
                $take_result_discount = $this->price - $this->discount_step_2;
                DB::table('create_product_with_discounts')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'name_pro' => 'برنج فجر',
                    'item_kesht' => $this->item_kesht,
                    'code_pro' => rand(1000, 9999),
                    'discount' => $this->discount,
                    'price' => $this->price,
                    'result_discount' => $take_result_discount,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }
        }elseif ($this->pic_url == 7){
            if ($this->discount == 0){
                DB::table('create_products')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'item_kesht' => $this->item_kesht,
                    'name_pro' => 'برنج ندا',
                    'code_pro' => rand(1000, 9999),
                    'price' => $this->price,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }else{
                $this->discount_step_1 = ($this->price * $this->discount);
                $this->discount_step_2 = $this->discount_step_1 / 100;
                $take_result_discount = $this->price - $this->discount_step_2;
                DB::table('create_product_with_discounts')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'name_pro' => 'برنج ندا',
                    'item_kesht' => $this->item_kesht,
                    'code_pro' => rand(1000, 9999),
                    'discount' => $this->discount,
                    'price' => $this->price,
                    'result_discount' => $take_result_discount,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }
        }elseif ($this->pic_url == 8){
            if ($this->discount == 0){
                DB::table('create_products')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'item_kesht' => $this->item_kesht,
                    'name_pro' => 'برنج صدری',
                    'code_pro' => rand(1000, 9999),
                    'price' => $this->price,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }else{
                $this->discount_step_1 = ($this->price * $this->discount);
                $this->discount_step_2 = $this->discount_step_1 / 100;
                $take_result_discount = $this->price - $this->discount_step_2;
                DB::table('create_product_with_discounts')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'name_pro' => 'برنج صدری',
                    'item_kesht' => $this->item_kesht,
                    'code_pro' => rand(1000, 9999),
                    'discount' => $this->discount,
                    'price' => $this->price,
                    'result_discount' => $take_result_discount,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }
        }elseif ($this->pic_url == 9){
            if ($this->discount == 0){
                DB::table('create_products')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'item_kesht' => $this->item_kesht,
                    'name_pro' => 'برنج شیرودی',
                    'code_pro' => rand(1000, 9999),
                    'price' => $this->price,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }else{
                $this->discount_step_1 = ($this->price * $this->discount);
                $this->discount_step_2 = $this->discount_step_1 / 100;
                $take_result_discount = $this->price - $this->discount_step_2;
                DB::table('create_product_with_discounts')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'name_pro' => 'برنج شیرودی',
                    'item_kesht' => $this->item_kesht,
                    'code_pro' => rand(1000, 9999),
                    'discount' => $this->discount,
                    'price' => $this->price,
                    'result_discount' => $take_result_discount,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }
        }elseif ($this->pic_url == 10){
            if ($this->discount == 0){
                DB::table('create_products')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'item_kesht' => $this->item_kesht,
                    'name_pro' => 'برنج طارم زنجان',
                    'code_pro' => rand(1000, 9999),
                    'price' => $this->price,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }else{
                $this->discount_step_1 = ($this->price * $this->discount);
                $this->discount_step_2 = $this->discount_step_1 / 100;
                $take_result_discount = $this->price - $this->discount_step_2;
                DB::table('create_product_with_discounts')->insert([
                    'user_id' => Auth::id(),
                    'pic_url' => $this->pic_url,
                    'name_pro' => 'برنج طارم زنجان',
                    'item_kesht' => $this->item_kesht,
                    'code_pro' => rand(1000, 9999),
                    'discount' => $this->discount,
                    'price' => $this->price,
                    'result_discount' => $take_result_discount,
                    'time_create_product' => jdate('y/m/d')

                ]);
            }
        }

        $this->reset(['pic_url', 'price', 'discount']);
        $this->modal_page = 0;
        $this->alert = 1;
        return view('livewire.user.seller.seller-dashboard');

    }
}
