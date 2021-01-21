<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerSkillTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_skill_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('skill_test_id');
            $table->string('jawaban_siswa');
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
        Schema::dropIfExists('answer_skill_tests');
    }
}
