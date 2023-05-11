<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logbook extends Model
{
    use HasFactory;
    protected $table = 'logbook';
    protected $primaryKey = 'ID_LOGBOOK';
    protected $fillable = ['ID_LOGBOOK','NAMA','EMAIL','TGL_KEGIATAN','DESKRIPSI'];
}
