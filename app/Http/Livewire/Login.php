<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $userName;
    public $userPassword;

    protected $rules = [
        'userName' => 'required|min:6|email',
        'userPassword' => 'required|min:3'
    ];

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $this->validate($this->rules);

        dd($this->userName, $this->userPassword);
    }
}
