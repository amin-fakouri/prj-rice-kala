<?php

namespace App\Livewire\Products;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AllProducts extends Component
{
    public $get_id;
    public $products_discount;
    public $products;
    public $companies;

    public $page_mode = 0;
    #[Layout('layouts.app')]
    public function mount($i)
    {
        $this->get_id = $i;
    }
    public function render()
    {
        $this->products_discount = DB::table('create_product_with_discounts')->orderBy('id', 'desc',)->get();
        $this->products = DB::table('create_products')->orderBy('id', 'desc',)->get();
        $this->companies = \App\Models\CreateAccountCompany::all();
        return view('livewire.products.all-products');
    }

    public function product_dis()
    {
        $this->page_mode = 1;
    }

    public function product()
    {
        $this->page_mode = 2;
    }

    public function back()
    {
        $this->page_mode = 0;
    }
}
