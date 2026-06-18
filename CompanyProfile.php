<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = 'company_profiles';

    protected $fillable = [
        'nama_perusahaan',
        'alamat',
        'telepon',
        'email',
        'deskripsi',
        'visi',
        'misi',
        'logo',
    ];
}
