<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_plat',
        'layanan_id',
    ];

    public function Layanan()
    {
        return $this->belongsTo(layanan::class);
    }
}
