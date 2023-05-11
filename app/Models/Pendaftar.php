<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftar';
    protected $primaryKey = 'ID_PENDAFTAR';
    protected $fillable = [
        'NAMA', 'EMAIL', 'ASAL_INSTANSI', 'JURUSAN', 'NO_TLP', 'JENIS_INTERN', 'KEL_IND',
        'PERIODE_MAGANG', 'START_DATE', 'END_DATE', 'PILIHAN_TEMPAT', 'RENCANA_KEGIATAN', 'FILE_CV', 'STATUS_PENDAFTAR'
    ];
}
