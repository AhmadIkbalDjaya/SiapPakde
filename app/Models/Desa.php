<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpHandler;

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

    public function publikasi()
    {
        return $this->hasMany(Publikasi::class);
    }

    public function perangkat_desa()
    {
        return $this->hasMany(PerangkatDesa::class);
    }

    public function kawasan()
    {
        return $this->hasMany(Kawasan::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function status_desa()
    {
        return $this->belongsTo(StatusDesa::class);
    }
}
