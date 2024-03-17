<?php

namespace App\Livewire;

use App\Http\Controllers\Applications\ApplicationController;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('MyTickets')]
class MyTickets extends Component
{
    public function render(ApplicationController $controller)
    {
        
        return view('livewire.my-tickets');
    }
}