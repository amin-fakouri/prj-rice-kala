<?php

namespace App\Livewire\User\VisitPage;

use App\Livewire\User\CreateAccountCompany;
use App\Models\create_account_company;
use App\Models\CreateProduct;
use App\Models\CreateProductWithDiscount;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class VisistPage extends Component
{
    public $search_company;
    public $companys;

    public $products_discount;
    public $products;

    public $page_mode = 0;

    public $companies;


    #[Layout('layouts.app')]
    public function mount($name_com_id)
    {
        $this->companys = \App\Models\CreateAccountCompany::all();
        foreach ($this->companys as $this->company){
            if ($this->company['name_company'] == $name_com_id){
                $this->search_company = $this->company;
            }
        }
    }
    public function render()
    {
        $this->products_discount = DB::table('create_product_with_discounts')->orderBy('id', 'desc',)->get();
        $this->products = DB::table('create_products')->orderBy('id', 'desc',)->get();
        $this->companies = \App\Models\CreateAccountCompany::all();
        return view('livewire.user.visit-page.visist-page');
    }

    public function product_dis()
    {
        $this->page_mode = 1;
    }

    public function product()
    {
        $this->page_mode = 2;
    }

    public function back()
    {
        $this->page_mode = 0;
    }
}
