<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Explore extends Model
{
    // Table Name
    protected $table = 'explores';
    // Primary Key
    public $primary_key = 'id';
    // Timestamps
    public $timestamps = false;

    protected $fillable = [
        'judul_materi',
        'isi_materi',
        'kategori'
    ];

}
