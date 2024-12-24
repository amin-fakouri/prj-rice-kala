<?php

namespace App\Livewire\User;

use App\Models\BuyProductDiscount;
use App\Models\CreateProductWithDiscount;
use Livewire\Attributes\Layout;
use Livewire\Component;

class FishProductDiscount extends Component
{
    public $find_product_id;
    #[Layout('layouts.app')]
    public function mount($product_id)
    {
        $this->find_product_id = BuyProductDiscount::find($product_id);
    }
    public function render()
    {
        return view('livewire.user.fish-product-discount');
    }
}
