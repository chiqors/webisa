<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerDailyQuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_daily_quests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('daily_quest_id');
            $table->string('jawaban_siswa');
            $table->integer('skor_nilai');
            $table->datetime('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_daily_quests');
    }
}
