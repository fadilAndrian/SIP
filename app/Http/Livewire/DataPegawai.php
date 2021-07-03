<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataPegawai extends Component
{
    public function render()
    {
        return view('livewire.data-pegawai')
        ->extends('layouts.layout')
        ->section('content');
    }
}
