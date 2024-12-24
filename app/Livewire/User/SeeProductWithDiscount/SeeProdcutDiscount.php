<?php

namespace App\Livewire\User\SeeProductWithDiscount;

use App\Models\CreateAccountCompany;
use App\Models\CreateProductWithDiscount;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SeeProdcutDiscount extends Component
{
    public $find_product_discount_id;
    public $companys;
    #[Layout('layouts.app')]
    public function mount($product_id)
    {
        $this->find_product_discount_id = CreateProductWithDiscount::find($product_id);
    }
    public function render()
    {
        $this->companys = CreateAccountCompany::all();
        return view('livewire.user.see-product-with-discount.see-prodcut-discount');
    }
}
