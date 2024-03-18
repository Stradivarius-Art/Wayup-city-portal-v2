<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Register')]
class Register extends Component
{
    #[Validate('required|string|max:100')]
    public $name;
    #[Validate('required|string|email')]
    public $email;
    #[Validate('required|min:6')]
    public $password;
    public $password_confirmation;

    public function register()
    {
        $this->validate();
        $response = Http::post('http://127.0.0.1:8081/api/user/create', [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation
        ]);


        $this->reset();

        if ($response->successful()) {
            session()->flash('message', 'User registered successfully');
        } else {
            session()->flash('error', 'Registration failed');
        }
    }


    public function render()
    {
        return view('livewire.register');
    }
}
