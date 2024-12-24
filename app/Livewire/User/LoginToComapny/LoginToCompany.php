<?php

namespace App\Livewire\User\LoginToComapny;

use App\Models\CreateAccountCompany;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\Layout;
use Livewire\Component;

class LoginToCompany extends Component
{
    public $name_company;
    public $password;

    public $alert = 0;

    public $companys;
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.user.login-to-comapny.login-to-company');
    }

    public function login()
    {

//        $validate = $this->validate([
//            'name_company' => ['required', 'string', 'max:255', 'unique:'.User::class],
//            'password' => ['required'],
//        ]);
        $this->companys = CreateAccountCompany::all();

        foreach ($this->companys as $this->company){
            if ($this->company['name_company'] == $this->name_company and $this->company['password'] == $this->password
            and $this->company['user_id'] == auth()->user()->id){

                return redirect(URL::signedRoute('dash_seller', ['id' => $this->company['id']]));

            }elseif($this->company['name_company'] =! $this->name_company or $this->company['password'] =! $this->password
                or $this->company['user_id'] =! auth()->user()->id ){
                $this->alert = 1;
            }

        }
    }

    public function close_me()
    {
        $this->alert = 0;
    }

}
