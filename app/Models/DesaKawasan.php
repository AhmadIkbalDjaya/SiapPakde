<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesaKawasan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kawasan()
    {
        return $this->hasMany(Kawasan::class);
    }
}
