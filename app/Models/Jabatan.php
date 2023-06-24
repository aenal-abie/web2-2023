<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_jabatan',
        'nama_jabatan',
        'priode',
    ];

    public function jabatanKaryawan() {
        return $this->hasMany(JabatanKaryawan::class);
    }
}
