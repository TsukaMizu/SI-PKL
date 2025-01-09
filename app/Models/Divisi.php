<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    // Nama Tabel
    protected $table = 'divisi';

    // Primary Key 
    protected  $primaryKey = 'divisi_id';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_divisi',
        'kapasitas',
        'status_divisi',
    ];

    /**
     * Relasi dengan model ProgramStudi.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mentor(){
        return $this->belongsTo(Mentor::class, 'divisi_id', 'divisi_id');
    }
}
