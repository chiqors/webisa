<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer_Practice extends Model
{
    // Table Name
    protected $table = 'answer_practices';
    // Primary Key
    public $primary_key = 'id';
    // Timestamps
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'practice_id',
        'jawaban_siswa',
        'skor_nilai'
    ];
}
