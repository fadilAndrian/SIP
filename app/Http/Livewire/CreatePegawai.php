<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePegawai extends Component
{
    public function render()
    {
        return view('livewire.create-pegawai')
        ->extends('layouts.layout')
        ->section('content');
    }
}
