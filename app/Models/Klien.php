<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klien extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function projects(){
        return $this->hasMany(Project::class, 'klien_id');
    }
}
