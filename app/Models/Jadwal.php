<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
    'judul', 'tanggal', 'waktu', 'link_youtube', 'lokasi','pengkhotbah'
];
}
