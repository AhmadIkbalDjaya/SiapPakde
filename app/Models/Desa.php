<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function bumdes()
    {
        return $this->hasMany(Bumdes::class);
    }

    public function bpd()
    {
        return $this->hasOne(Bpd::class);
    }

    public function kader_pkk()
    {
        return $this->hasMany(KaderPkk::class);
    }

    public function posyandu()
    {
        return $this->hasMany(Posyandu::class);
    }

    public function kpm()
    {
        return $this->hasMany(Kpm::class);
    }

    public function karang_taruna()
    {
        return $this->hasMany(KarangTaruna::class);
    }

    public function lpm()
    {
        return $this->hasMany(Lpm::class);
    }

    public function kawasan()
    {
        return $this->hasOne(Kawasan::class);
    }

    public function publikasi()
    {
        return $this->hasMany(Publikasi::class);
    }
}
