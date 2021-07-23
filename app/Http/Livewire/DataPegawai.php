<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Children;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class DataPegawai extends Component
{
	public $search;
	public $isShow, $halamanShow, $halamanCreate=false;
	public $hasRegistered=true, $isEditAnak, $isTambahAnak, $jmlAnak, $isUserEmpty;
	public $anak;

	public $email, $password, $role;
	public $nama, $nip, $alamat, $nik, $bpjs_kes, $divisi, $bpjs_kerja, $jabatan, $kk, $status_pegawai, $npwp, $masa_kontrak, $tgl_lahir, $tmpt_lahir;
	public $user_id, $nama_pasangan, $ktp_pasangan, $tgl_lahir_pasangan, $tmpt_lahir_pasangan, $pekerjaan_pasangan, $notlp_pasangan, $alamat_pasangan;

	use WithPagination;

    public function render()
    {
    	// untuk fitur pencarian
    	$searchParam = '%'.$this->search.'%';

    	$user = DB::table('users')
    			->join('profiles', 'users.id', '=', 'profiles.user_id')
    			->where('name','LIKE',$searchParam)
    			->orWhere('nip','LIKE',$searchParam)
    			->select('users.id','users.name','profiles.nip')
    			->paginate(10);

    	// untuk mengetahui apakah data user kosong
    	$jmlUser = $user->count();
    	if ($jmlUser == 0) {
    		$this->isUserEmpty = true;
    	}

    	// untuk fungsi if, jika belum ada data anak pada sebuah user, maka jalankan ini
        $this->jmlAnak = Children::where('user_id','=', $this->user_id)->count();

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
        $this->nip = $user->profile->nip;
        $this->alamat = $user->profile->alamat;
        $this->nik = $user->profile->nik;
        $this->bpjs_kes = $user->profile->no_bpjs_kesehatan;
        $this->divisi = $user->profile->divisi;
        $this->bpjs_kerja = $user->profile->no_bpjs_ketenagakerjaan;
        $this->jabatan = $user->profile->jabatan;
        $this->kk = $user->profile->no_kk;
        $this->status_pegawai = $user->profile->status_pegawai;
        $this->npwp = $user->profile->NPWP;
        $this->masa_kontrak = $user->profile->habis_masa_kontrak;
        $this->tgl_lahir = $user->profile->tgl_lahir;
        $this->tmpt_lahir = $user->profile->tempat_lahir;

        // Keluarga
        $this->nama_pasangan = $user->family->nama_pasangan;
        $this->ktp_pasangan = $user->family->nik;
        $this->tgl_lahir_pasangan = $user->family->tgl_lahir;
        $this->tmpt_lahir_pasangan = $user->family->tempat_lahir;
        $this->pekerjaan_pasangan = $user->family->pekerjaan;
        $this->notlp_pasangan = $user->family->no_tlp;
        $this->alamat_pasangan = $user->family->alamat;

        // Anak
        // $this->nama_anak = $user->children->nama_anak;   
        $this->showAnak($id);

        $this->untukShow();
    }

    public function showAnak($id) {
    	// untuk menampilkan data anak
    	$this->anak = Children::where('user_id', '=', $id)->get();
    	// dd($anak);


    	$this->isShow();
    }

    public function edit($id) {
    	$user = User::findOrFail($id);

    	// Akun
        $this->nama = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->role = $user->role;

        // Pegawai
        $this->nip = $user->profile->nip;
        $this->alamat = $user->profile->alamat;
        $this->nik = $user->profile->nik;
        $this->bpjs_kes = $user->profile->no_bpjs_kesehatan;
        $this->divisi = $user->profile->divisi;
        $this->bpjs_kerja = $user->profile->no_bpjs_ketenagakerjaan;
        $this->jabatan = $user->profile->jabatan;
        $this->kk = $user->profile->no_kk;
        $this->status_pegawai = $user->profile->status_pegawai;
        $this->npwp = $user->profile->NPWP;
        $this->masa_kontrak = $user->profile->habis_masa_kontrak;
        $this->tgl_lahir = $user->profile->tgl_lahir;
        $this->tmpt_lahir = $user->profile->tempat_lahir;

        // Keluarga
        $this->nama_pasangan = $user->family->nama_pasangan;
        $this->ktp_pasangan = $user->family->nik;
        $this->tgl_lahir_pasangan = $user->family->tgl_lahir;
        $this->tmpt_lahir_pasangan = $user->family->tempat_lahir;
        $this->pekerjaan_pasangan = $user->family->pekerjaan;
        $this->notlp_pasangan = $user->family->no_tlp;
        $this->alamat_pasangan = $user->family->alamat;

        // Anak
        // $this->nama_anak = $user->children->nama_anak;   
        $this->showAnak($id);
    }

    public function delete($id) {
    	// dd($id);
    	$children = User::findOrFail($id)->childrenn;
    	$family = User::findOrFail($id)->family;
    	$profile = User::findOrFail($id)->profile;
    	$user = User::findOrFail($id);
    	// dd($family);
    	if ($family!=null) {
    		$family->delete();
    	}

    	if ($children!=null) {
    		$children->delete();
    	}
    	$profile->delete();
    	$user->delete();

    	session()->flash('succes', 'Data telah terhapus');
    }








	// fungsi triger 
    public function isShow() {
    	$this->isShow = true;
    }

    public function isNotShow() {
    	$this->isShow = false;
    	$this->untukShowX();
    }

    public function untukShow() {
    	$this->halamanShow = true;
    }

    public function untukShowX() {
    	$this->halamanShow = false;
    }
}
