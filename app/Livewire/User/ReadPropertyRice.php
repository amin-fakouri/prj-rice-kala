<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

class ReadPropertyRice extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.user.read-property-rice');
    }
}
