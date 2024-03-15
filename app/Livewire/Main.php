<?php

namespace App\Livewire;

use App\Http\Controllers\Applications\ApplicationController;
use App\Models\Application;
use App\Models\ApplicationImage;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Main')]
class Main extends Component
{
    public function render()
    {
        $applications = Application::get();

        return view('livewire.main', [
            'applications' => $applications
        ]);
    }
}