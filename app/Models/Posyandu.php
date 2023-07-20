<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function  desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function kader_posyandu()
    {
        return $this->hasMany(KaderPosyandu::class);
    }
}
