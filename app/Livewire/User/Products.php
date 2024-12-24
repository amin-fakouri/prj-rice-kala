<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Products extends Component
{
    public $products;
    public $companys;
    #[Layout('layouts.app')]
    public function render()
    {
        $this->products = DB::table('create_products')->orderBy('id', 'desc',)->get();
        $this->companys = \App\Models\CreateAccountCompany::all();
        return view('livewire.user.products');
    }
}
