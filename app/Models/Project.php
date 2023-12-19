<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function language(){
        return $this->belongsTo(Bahasa::class, 'bahasa_id');
    }

    public function penawaran(){
        return $this->belongsTo(Penawaran::class, 'penawaran_id');
    }

    public function klien(){
        return $this->belongsTo(Klien::class, 'klien_id');
    }

    public function permintaan(){
        return $this->hasMany(Permintaan::class);
    }

    public function tagihan(){
        return $this->hasMany(Tagihan::class);
    }
}
