<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kawasan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function  kategori_kawasan()
    {
        return $this->belongsTo(KategoriKawasan::class);
    }
    public function  desa()
    {
        return $this->belongsTo(Desa::class);
    }
}
