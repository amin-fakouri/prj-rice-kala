<?php

namespace App\Livewire;

use App\Models\CreateAccountCompany;
use App\Models\CreateProduct;
use App\Models\CreateProductWithDiscount;
use App\Models\User;
use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

class MyDashboard extends Component
{
    public $user_id;

    public $products;
    public $products_discount;
    public $input_search;

    public $companys;
    public $modal = 0;

    #[Url(history: true)]
    public $sortBy = "created_at";

    #[Url(history: true)]
    public $sortDir = "DESC";

    #[Layout('layouts.app')]
    public function mount($user_id)
    {
        $this->user_id = User::find($user_id);
    }
    public function render()
    {
        $this->products = DB::table('create_products')->orderBy('id', 'desc',)->get();
        $this->companys = CreateAccountCompany::all();
        $this->products_discount = DB::table('create_product_with_discounts')->orderBy('id', 'desc',)->get();
        return view('livewire.my-dashboard',['products_discount' => $this->products_discount]);
    }

    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }

    public function search()
    {
        return redirect()->route('visit', ['name_com_id' => $this->input_search]);
    }

    public function open_modal()
    {
        $this->modal = 1;
    }

    public function close_modal()
    {
        $this->modal = 0;
    }
}
