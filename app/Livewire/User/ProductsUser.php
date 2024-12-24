<?php

namespace App\Livewire\User;

use App\Models\CreateProduct;
use App\Models\CreateProductWithDiscount;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProductsUser extends Component
{
    public $products;
    public $products_discount;
    public $delete_product_discounts;

    // Find Id For Delete Product
    public $delete_id;

    #[Layout('layouts.app')]
    public function render()
    {
        $this->products = CreateProduct::all();
        $this->products_discount = CreateProductWithDiscount::all();
        return view('livewire.user.products-user');
    }

    public function delete_product($id)
    {
        $this->delete_id = CreateProduct::find($id)->delete();
    }

    public function delete_product_discount($id)
    {
        $this->delete_product_discounts = CreateProductWithDiscount::find($id)->delete();
    }
}
