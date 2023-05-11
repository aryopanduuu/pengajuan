<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'ID_PENGAJUAN';
    protected $fillable = ['EMAIL, SURAT_PENGANTAR, PROPOSAL, STATUS_PENGAJUAN'];
}
