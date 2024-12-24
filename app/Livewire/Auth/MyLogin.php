<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\Layout;
use Livewire\Component;
class MyLogin extends Component
{
    public $phone_number;

    public $password = '12345678';


    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.auth.my-login');
    }

    public function login()
    {
        $inputs = [
            'phone_number' => $this->phone_number,
            'password' => $this->password
        ];

        $this->validate([
            'phone_number' => ['required', 'digits:11'],
        ]);

        if (Auth::attempt($inputs)){
            return redirect(URL::signedRoute('my_dashboard', ['user_id' => Auth::id()] ));
        }else{
            abort(404);
        }
    }
}
