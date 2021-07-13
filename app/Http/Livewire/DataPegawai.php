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
    	
    	// Akun
        $this->nama = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->role = $user->role;

        // Pegawai
        $this->nip = $user->nip;
        $this->alamat = $user->alamat;
        $this->nik = $user->nik;
        $this->bpjs_kes = $user->no_bpjs_kesehatan;
        $this->divisi = $user->divisi;
        $this->bpjs_kerja = $user->no_bpjs_ketenagakerjaan;
        $this->jabatan = $user->jabatan;
        $this->kk = $user->no_kk;
        $this->status_pegawai = $user->status_pegawai;
        $this->npwp = $user->NPWP;
        $this->masa_kontrak = $user->habis_masa_kontrak;
        $this->tgl_lahir = $user->tgl_lahir;
        $this->tmpt_lahir = $user->tempat_lahir;

        // Keluarga
        $this->nama_pasangan = $user->nama_pasangan;
        $this->ktp_pasangan = $user->nik;
        $this->tgl_lahir_pasangan = $user->tgl_lahir;
        $this->tmpt_lahir_pasangan = $user->tempat_lahir;
        $this->pekerjaan_pasangan = $user->pekerjaan;
        $this->notlp_pasangan = $user->no_tlp;
        $this->alamat_pasangan = $user->alamat;

        // Anak
        $this->nama_anak = $user->nama_anak;   

    	$this->isShow();
    }

    public function delete($id) {
    	// dd($id);
    	User::findOrFail($id)->delete();
    	session()->flash('succes', 'Data telah terhapus');
    }




	// fungsi triger 
    public function isShow() {
    	$this->isShow = true;
    }

    public function isNotShow() {
    	$this->isShow = false;
    }
}
