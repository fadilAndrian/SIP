<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Profile;
use App\Models\Family;
use App\Models\Children;

class CreatePegawai extends Component
{
	// public $tambahAnak, $anak=1; 
    // public $searchParam;
    public $hasRegistered;
    public $isEditAnak, $isTambahAnak;
    public $jmlAnak;

    public $user_id, $nama, $password, $email, $role,  $user_idx;
    public $profile_id, $nip, $alamat, $nik, $bpjs_kes, $divisi, $bpjs_kerja, $jabatan, $kk, $status_pegawai, $npwp, $masa_kontrak, $tgl_lahir, $tmpt_lahir;
	public $family_id, $nama_pasangan, $ktp_pasangan, $tgl_lahir_pasangan, $tmpt_lahir_pasangan, $pekerjaan_pasangan, $notlp_pasangan, $alamat_pasangan;
    public $children_id, $nama_anak;

    public function render()
    {   

        $jmluser = User::all()->count();
        // dd($jmluser);
        // untuk mengatur user_id
        if ($jmluser != 0) {
            $data = User::orderBy('id', 'DESC')->first();
            $idx = $data->id;
            $id = $data->id+1;
        } else {
            $id = 0;
            $idx =$id-1;
        }
        // dd($id);
        $this->user_idx = $idx;
        $this->user_id = $id;


        // untuk menampilkan data anak
        $anak = Children::where('user_id','=', $this->user_idx)->get();
        // dd($anak);

        // untuk fungsi if, jika belum ada data anak pada sebuah user, maka jalankan ini
        $this->jmlAnak = Children::where('user_id','=', $this->user_idx)->count();
        // dd($jmlAnak);

        return view('livewire.create-pegawai', ['anak'=>$anak])
        ->extends('layouts.layout')
        ->section('content');
    }

    public function storeAkun() {
        $this->validate([
            'nama' => 'required|max:255',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        User::updateOrCreate(['id' => $this->user_id], [
            'name' => $this->nama,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role' => $this->role,
        ]);

        session()->flash('succes', 'User berhasil didaftarkan');
        $this->openBiodata();


    }

    public function storeProfile() {
        $this->validate([
            'nip' => 'required|numeric',
            'alamat' => 'required|max:255',
            'nik' => 'required|numeric',
            'bpjs_kes' => 'required|numeric',
            'divisi' => 'required',
            'bpjs_kerja' => 'required|numeric',
            'jabatan' => 'required',
            'kk' => 'required|numeric',
            'status_pegawai' => 'required',
            'npwp' => 'required|numeric',
            'masa_kontrak' => 'required',
            'tgl_lahir' => 'required',
            'tmpt_lahir' => 'required',
        ]);

        Profile::updateOrCreate(['id' => $this->profile_id], [
            'user_id' => $this->user_idx,
            'nip' => $this->nip,
            'alamat' => $this->alamat,
            'nik' => $this->nik,
            'no_bpjs_kesehatan' => $this->bpjs_kes,
            'divisi' => $this->divisi,
            'no_bpjs_ketenagakerjaan' => $this->bpjs_kerja,
            'jabatan' => $this->jabatan,
            'no_kk' => $this->kk,
            'status_pegawai' => $this->status_pegawai,
            'NPWP' => $this->npwp,
            'habis_masa_kontrak' => $this->masa_kontrak,
            'tgl_lahir' => $this->tgl_lahir,
            'tempat_lahir' => $this->tmpt_lahir
        ]);

        session()->flash('succes', 'Data diri berhasil disimpan');
    }

    public function storeKeluarga() {
        $this->validate([
            'nama_pasangan' => 'max:255',
            'ktp_pasangan' => 'numeric',
            'tmpt_lahir_pasangan' => 'max:255',
            'notlp_pasangan' => 'numeric',
            'alamat_pasangan' => 'max:255',
        ]);

        Family::updateOrCreate(['id' => $this->family_id], [
            'user_id' => $this->user_idx,
            'nama_pasangan' => $this->nama_pasangan,
            'nik' => $this->ktp_pasangan,
            'tgl_lahir' => $this->tgl_lahir_pasangan,
            'tempat_lahir' => $this->tmpt_lahir_pasangan,
            'pekerjaan' => $this->pekerjaan_pasangan,
            'no_tlp' => $this->notlp_pasangan,
            'alamat' => $this->alamat_pasangan,
        ]);

        session()->flash('succes', 'Data Keluarga berhasil disimpan');
    }

    public function storeAnak() {
        Children::updateOrCreate(['id' => $this->children_id], [
            'user_id' => $this->user_idx,
            'nama_anak' => $this->nama_anak,
        ]);

        $this->closeEditAnak();
        $this->closeTambahAnak();
    }

    public function editAnak($id) {
        $data = Children::findOrFail($id);
        // dd($data);

        $this->children_id = $data->id;
        $this->nama_anak = $data->nama_anak;

        $this->openEditAnak();
    }

    public function deleteAnak($id) {
        Children::findOrFail($id)->delete();
    }

    public function show($id) {
        $user = User::findOrFail($id);

        // Akun
        $this->nama = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->role = $user->role;

        // Pegawai
        $this->user_id = $user->profile->user_id;
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
        $this->nama_anak = $user->children->nama_anak;   
    }

    // public function editAkun($id) {
    //     $this->show($id);
    //     $this->unregistered();
    // }









    // support system
    public function openBiodata() {
        $this->hasRegistered = true;
    }

    public function openTambahAnak() {
        $this->isTambahAnak = true;
    }

    public function closeTambahAnak() {
        $this->isTambahAnak = false;
    } 

    public function openEditAnak() {
        $this->isEditAnak = true;
    } 

    public function closeEditAnak() {
        $this->isEditAnak = false;

        $this->cancelEditAnak();
    } 

    public function cancelEditAnak() {
        $this->user_id = '';
        $this->nama_anak = '';
    }
}
