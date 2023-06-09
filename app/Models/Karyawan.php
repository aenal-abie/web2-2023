<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'nama',
        'jabatan',
        'jenis_kelamin',
        'tanggal_lahir',
        'tanggal_bergabung'
    ];

    public function jabatanKaryawan() {
        return $this->hasOne(JabatanKaryawan::class);
    }
}
