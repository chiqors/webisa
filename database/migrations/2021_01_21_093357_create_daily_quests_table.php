<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyQuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_quests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_daily_quest');
            $table->text('pertanyaan');
            $table->string('jawaban');
            $table->integer('skor_nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_quests');
    }
}
