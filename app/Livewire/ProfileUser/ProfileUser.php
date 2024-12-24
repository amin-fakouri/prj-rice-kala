<?php

namespace App\Livewire\ProfileUser;

use App\Models\BuyProduct;
use App\Models\BuyProductDiscount;
use App\Models\CreateAccountCompany;
use App\Models\CreateProduct;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProfileUser extends Component
{
    public $find_id;
    public $product_buys;
    public $product_discount_buys;
    public $companys;
    #[Layout('layouts.app')]
    public function mount($id)
    {
        $this->find_id = User::find($id);
    }
    public function render()
    {
        $this->product_buys = BuyProduct::all();
        $this->product_discount_buys = BuyProductDiscount::all();
        $this->companys = CreateAccountCompany::all();
        return view('livewire.profile-user.profile-user');
    }
}
