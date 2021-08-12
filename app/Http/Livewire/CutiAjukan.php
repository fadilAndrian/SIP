<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CutiAjukan extends Component
{
    public function render()
    {
        return view('livewire.cuti-besar')
        ->extends('layouts.layout')
        ->section('content');
    }
}
