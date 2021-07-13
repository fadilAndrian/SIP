<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [
    	'user_id', 'nip', 'nik', 'divisi', 'jabatan', 'status_pegawai', 'habis_masa_kontrak', 'tgl_lahir', 
    	'tempat_lahir', 'alamat', 'no_bpjs_kesehatan', 'no_bpjs_ketenagakerjaan', 'no_kk', 'NPWP',
    ];
}
