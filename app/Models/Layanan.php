<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'layanan',
        'biaya',
    ];

    public function pelanggang()
    {
        return $this->hasMany(Pelanggang::class);
    }
}
