<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    /** @use HasFactory<\Database\Factories\BeritaFactory> */
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'excerpt',
        'gambar',
        'published_at',
        'status',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
