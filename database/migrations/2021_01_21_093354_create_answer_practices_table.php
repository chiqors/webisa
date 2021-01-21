<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerPracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_practices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('practice_id');
            $table->integer('jawaban_siswa');
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
        Schema::dropIfExists('answer_practices');
    }
}
