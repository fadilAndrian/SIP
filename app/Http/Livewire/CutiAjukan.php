<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CutiAjukan extends Component
{
	public $hideMenu=0;

    public function render()
    {
        return view('livewire.cuti-ajukan')
        ->extends('layouts.layout')
        ->section('content');
    }










    // fungsi untuk fitur
    
}
