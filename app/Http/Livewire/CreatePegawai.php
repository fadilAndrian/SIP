<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePegawai extends Component
{
	public $tambahAnak, $anak=1; 

	public $nama_anak;

    public function render()
    {
        return view('livewire.create-pegawai')
        ->extends('layouts.layout')
        ->section('content');
    }

    public function tambahAnak() {
    	// 
    }
}
