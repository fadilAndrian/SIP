<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
	public $email, $password;

    public function render()
    {
        return view('livewire.login-form')
        ->extends('layouts.login')
        ->section('content');
    }

    public function login() {
    	$this->validate([
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	if (Auth::attempt(['email'=>$this->email, 'password'=>$this->password])) {
            // if (Auth()->user()->role_id == 2) {
            //     return redirect()->route('ruangguru');
            // } else if (Auth()->user()->role_id == 3) {
            //     return redirect()->route('ruangkelas');
            // } else {
            //     return redirect()->route('admin-role');
            // }
    		return redirect()->route('dashboard');

        } else {
        	// kalau gagal
            session()->flash('error', 'Email atau password tidak valid');
            return redirect()->route('login');
        }


    }

    public function forgot_pass() {
    	// 
    }
}
