<?php

namespace App\Livewire\User\Seller;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Seller extends Component
{
    public $find_id;
    #[Layout('layouts.app')]
    public function mount($user_id)
    {
        $this->find_id = User::find($user_id);
    }
    public function render()
    {
        return view('livewire.user.seller.seller');
    }
}
