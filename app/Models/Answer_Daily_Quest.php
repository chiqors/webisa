<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer_Daily_Quest extends Model
{
    // Table Name
    protected $table = 'answer_daily_quests';
    // Primary Key
    public $primary_key = 'id';
    // Timestamps
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'daily_quest_id',
        'jawaban_siswa',
        'skor_nilai',
        'time',
    ];
}
