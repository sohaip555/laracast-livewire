<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class sugnup extends Component
{
    #[Validate('required')]
    public $name;

    #[Validate('required|email')]
    public $email;

    #[Validate('required')]
    public $password;

    public $loginMessage;
    public function authenticate()
    {
        $user = $this->validate();

        User::create($user);

        $valid = \Auth::attempt(['name' => $this->name, 'email' => $this->email, 'password' => $this->password]);

        if (!($valid)) {
            $this->loginMessage = "Wrong email or password";
        }

        $this->redirectIntended('/dashboard');
    }

    public function render()
    {
        return view('livewire.sugnup');
    }
}
