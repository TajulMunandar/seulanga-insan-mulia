<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    /** @use HasFactory<\Database\Factories\TentangKamiFactory> */
    use HasFactory;

    protected $fillable = [
        'deskripsi',
        'visi',
        'misi',
        'sejarah',
    ];
}
