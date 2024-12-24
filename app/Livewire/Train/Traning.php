<?php

namespace App\Livewire\Train;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Traning extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.train.traning');
    }
}
