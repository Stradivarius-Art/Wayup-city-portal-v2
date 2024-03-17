<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Http;

#[Title('Main')]
class Main extends Component
{
    public $applications;

    public function mount()
    {
        $response = Http::get('http://127.0.0.1:8081/api/application');
        $this->applications = json_decode($response->body(), true);
    }
    public function render()
    {
        return view('livewire.main');
    }
}
