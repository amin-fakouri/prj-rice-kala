<?php

namespace App\Livewire\User;

use App\Models\CreateProductWithDiscount;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProductsDiscoun extends Component
{
    public $products_discount;
    public $companies;

    #[Layout('layouts.app')]
    public function render()
    {
        $this->products_discount = DB::table('create_product_with_discounts')->orderBy('id', 'desc',)->get();
        $this->companies = \App\Models\CreateAccountCompany::all();
        return view('livewire.user.products-discoun', ['products_discount' => $this->products_discount]);
    }
}
