<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class DataPegawai extends Component
{
	public $isShow;

	public $nama, $nip, $alamat, $nik, $bpjs_kes, $divisi, $bpjs_kerja, $jabatan, $kk, $status_pegawai, $npwp, $masa_kontrak, $tgl_lahir, $tmpt_lahir;
	public $nama_pasangan, $ktp_pasangan, $tgl_lahir_pasangan, $tmpt_lahir_pasangan, $pekerjaan_pasangan, $notlp_pasangan, $alamat_pasangan;

    public function render()
    {
    	$user = User::all();

        return view('livewire.data-pegawai', ['user'=>$user])
        ->extends('layouts.layout')
        ->section('content');
    }

    public function show($id) {
    	$user = User::findOrFail($id);
    	$this->nama = $user->name;
    	
    	$this->nip = $user->profile->nip; 
    	$this->alamat $user->profile->alamat;
    	$this->nik $user->profile->nik;
    	$this->bpjs_kes $user->profile->no_bpjs_kesehatan;
    	$this->divisi $user->profile->divisi;
    	$this->bpjs_kerja $user->profile->no_bpjs_ketenagakerjaan;
    	$this->jabatan $user->profile->jabatan;
    	$this->kk $user->profile->no_kk;
    	$this->status_pegawai $user->profile->status_pegawai;
    	$this->npwp $user->profile->NPWP;
    	$this->masa_kontrak $user->profile->habis_masa_kontrak;
    	$this->tgl_lahir $user->profile->tgl_lahir;
    	$this->tmpt_lahir $user->profile->tempat_lahir;

    	$this->isShow()
    }

    public function delete($id) {
    	// dd($id);
    	// User::findOrFail($id)->delete();
    	session()->flash('succes', 'Data telah terhapus.');
    }




	// fungsi triger 
    public function isShow() {
    	$this->isShow = true;
    }

    public function isNotShow() {
    	$this->isShow = false;
    }
}
