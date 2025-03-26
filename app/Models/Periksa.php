<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\RelationNotFoundException;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'periksas'; // Pastikan nama tabel sesuai dengan database

    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tanggal', // Sesuaikan dengan kolom yang ada di database
        'keluhan',
        'diagnosis',
    ];

    // Relasi ke pasien (User dengan role 'pasien')
    //pasien punya banyak pemeriksaan 
    public function pasien(): BelongsTo
    {
            return $this->belongsTo(User::class, 'id_pasien');
    }

    public function dokter(): BelongsTo
    {
            return $this->belongsTo(User::class, 'id_dokter');
    } 
}
