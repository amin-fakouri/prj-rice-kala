<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateAccountCompany extends Component
{
    public $find_id;
    public $companys;

    // Inputs
    public $f_name;
    public $l_name;
    public $phone_number;
    public $location_work;
    public $n_code;
    public $name_company;
    public $location_city;
    #[Layout('layouts.app')]
    public function mount($user_id)
    {
        $this->find_id = User::find($user_id);
    }
    public function render()
    {
        $this->companys = \App\Models\CreateAccountCompany::all();
        return view('livewire.user.create-account-company');
    }

    public function create()
    {
        DB::table('create_account_companies')->insert([
            'f_name' => $this->f_name,
            'l_name' => $this->l_name,
            'location_work' => $this->location_work,
            'location_city' => $this->location_city,
            'phone_number' => $this->phone_number,
            'n_code' => $this->n_code,
            'user_id' => Auth::id(),
            'name_company' => $this->name_company
        ]);

        return redirect(URL::signedRoute('dash_user'));

    }
}
