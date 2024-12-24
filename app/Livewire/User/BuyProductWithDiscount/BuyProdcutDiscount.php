<?php

namespace App\Livewire\User\BuyProductWithDiscount;

use App\Models\BuyProductDiscount;
use App\Models\CreateAccountCompany;
use App\Models\CreateProductWithDiscount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\Layout;
use Livewire\Component;

class BuyProdcutDiscount extends Component
{
    public $find_product_discount;
    public $accounts_company;
    public $products_discount;
    public $buys_id;
    public $pages = 0;
    // Inputs Form
    public $user_id;
    public $f_name;
    public $l_name;
    public $your_location;
    public $user_created_product;
    public $name_pro;
    public $vazn;
    public $code_product;
    public $price;
    public $discount;
    public $phone_number;
    public $result_discount;
    public $name_company;
    public $product_id;
    public $buy_id;
    #[Layout('layouts.app')]
    public function mount($product_id)
    {
        $this->find_product_discount = CreateProductWithDiscount::find($product_id);
    }
    public function render()
    {
        $this->accounts_company = CreateAccountCompany::all();
        $this->products_discount = CreateProductWithDiscount::all();
        $this->buys_id = BuyProductDiscount::all();
        return view('livewire.user.buy-product-with-discount.buy-prodcut-discount');
    }

    public function next_page()
    {
        $this->pages = 1;
    }

    public function create()
    {
        $random_number = rand(1000000, 9999999);
        $buys =  DB::table('buy_product_discounts')->insert([
            'product_id' => $this->product_id,
            'user_id' => $this->user_id,
            'buy_code' => $random_number,
            'user_created_product' => $this->user_created_product,
            'f_name' => $this->f_name,
            'l_name' => $this->l_name,
            'phone_number_user' => $this->phone_number,
            'your_location' => $this->your_location,
            'vazn' => $this->vazn,
            'name_product' => $this->name_pro,
            'name_company' => $this->name_company,
            'code_product' => $this->code_product,
            'price' => $this->price,
            'discount' => $this->discount,
            'result_discount' => $this->result_discount,
            'time_send' => jdate('y/m/d')
        ]);

        return redirect(URL::signedRoute('fish_pro_dis',['product_id' => $this->buy_id]));
    }
}
