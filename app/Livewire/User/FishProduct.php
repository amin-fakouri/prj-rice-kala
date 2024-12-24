<?php

namespace App\Livewire\User;

use App\Models\BuyProduct;
use App\Models\BuyProductDiscount;
use Livewire\Attributes\Layout;
use Livewire\Component;

class FishProduct extends Component
{
    public $find_product_id;
    #[Layout('layouts.app')]
    public function mount($product_id)
    {
        $this->find_product_id = BuyProduct::find($product_id);
    }
    public function render()
    {
        return view('livewire.user.fish-product');
    }
}
