<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;
    #[Validate('required')]
    public $password;

    public $loginMessage;
    public function authenticate()
    {
        $this->validate(['email' => 'email|required', 'password' => 'required']);

        $valid = \Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if (!($valid)) {
            $this->loginMessage = "Wrong email or password";
        }

        $this->redirectIntended('/dashboard');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
