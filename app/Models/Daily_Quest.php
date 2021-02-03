<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily_Quest extends Model
{
    // Table Name
    protected $table = 'daily_quests';
    // Primary Key
    public $primary_key = 'id';
    // Timestamps
    public $timestamps = false;

    protected $fillable = [
        'judul_daily_quests',
        'pertanyaan',
        'jawaban',
        'skor_nilai',
        'set_time'
    ];
}
