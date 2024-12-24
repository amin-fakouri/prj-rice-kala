<?php

namespace App\Livewire\User;

use App\Models\CreateProduct;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AddDiscount extends Component
{
    public $find_id_product;

    public $product_id;
    public $discount;
    public $price;

    // For Take Discount
    public $discount_price;

    public $discounts;

    // For Delete Discount
    public $dele_disocunt;
    #[Layout('layouts.app')]
    public function mount($id_product)
    {
        $this->find_id_product = CreateProduct::find($id_product);
    }
    public function render()
    {
        $this->discounts = \App\Models\AddDiscount::all();
        return view('livewire.user.add-discount');
    }

    public function delete_discount($id)
    {
        $this->dele_disocunt = \App\Models\AddDiscount::find($id)->delete();
    }

    public function create()
    {
        $this->discount_price = ($this->price * $this->discount) / 100;

        DB::table('add_discounts')->insert([
            'product_id' => $this->product_id,
            'discount' => $this->discount,
            'price_discount' => $this->discount_price
        ]);

        $this->reset(['discount']);
    }
}
