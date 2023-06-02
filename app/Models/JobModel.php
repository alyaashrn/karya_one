<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModel extends Model
{
    use HasFactory;
    protected $table = 'job';
    protected $primaryKey = 'idPekerjaan';
    protected $fillable = ["namaPekerjaan", "kategori", "gaji", "deskripsi", "syarat"];
}
