<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
       // Nama Tabel
       protected $table = 'mentor';

       // Primary Key 
       protected  $primaryKey = 'mentor_id';
   
       // Kolom yang dapat diisi
       protected $fillable = [
           'nama_mentor',
           'jabatan',
           'divisi_id'
       ];
    /**
     * Relasi dengan model ProgramStudi.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function divisi(){
        return $this->belongsTo(Divisi::class, 'divisi_id', 'divisi_id');
    }
       
}
