<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanKaryawan extends Model
{
    use HasFactory;


    public function karyawan() {
        return $this->belongsTo(Karyawan::class);
    }

    public function jabatan() {
        return $this->belongsTo(Jabatan::class);
    }
}
