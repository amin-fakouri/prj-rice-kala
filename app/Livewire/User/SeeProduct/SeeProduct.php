<?php

namespace App\Livewire\User\SeeProduct;

use App\Models\CreateAccountCompany;
use App\Models\CreateProduct;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SeeProduct extends Component
{
    public $find_product_id;
    public $companys;
    #[Layout('layouts.app')]
    public function mount($product_id)
    {
        $this->find_product_id = CreateProduct::find($product_id);
    }
    public function render()
    {
        $this->companys = CreateAccountCompany::all();
        return view('livewire.user.see-product.see-product');
    }
}
