<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BpdMember extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function bpd() {
        return $this->belongsTo(Bpd::class);
    }
}
