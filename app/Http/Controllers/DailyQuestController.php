<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daily_Quest;
use App\Models\Answer_Daily_Quest;
use App\Models\User;
use Carbon\Carbon;
use Auth;

class DailyQuestController extends Controller
{
    public function index()
    {
        $data_get = Daily_Quest::where('set_time', Carbon::today())->get();
        $data_get2 = Answer_Daily_Quest::where('user_id', Auth::user()->id)->whereDate('time', Carbon::today())->count();
        $data = array(
            'daily_quests' => $data_get,
            'count_answer' => $data_get2,
            'title' => 'Daily Quest'
        );
        return view('daily_quest')->with($data);
    }

    public function question($question)
    {
        $data_get = Daily_Quest::find($question);
        $data = array(
            'daily_quest' => $data_get,
            'title' => 'Daily Quest - '.$data_get->judul_daily_quest
        );
        return view('daily_quest_question')->with($data);
    }

    public function answer(Request $request, $id)
    {
        $request->validate([
            'answer' => 'required',
        ],[
            'answer.required' => 'Jawaban Harus Diisi!',
        ]);

        $skor = 0;
        $verify_answer = Daily_Quest::find($id);
        if ($verify_answer->jawaban == $request->input('answer')) {
            $skor = $verify_answer->skor_nilai;
            Answer_Daily_Quest::create([
                'user_id' => Auth::user()->id,
                'daily_quest_id' => $id,
                'jawaban_siswa' => $request->input('answer'),
                'skor_nilai' => 10,
                'time' => Carbon::now()
            ]);
            $data = [
                'daily_skor' => $skor,
                'daily_judul' => $verify_answer->judul_daily_quest,
                'daily_time' => $request->input('timer')
            ];

            $update_total = User::find(Auth::user()->id);
            $update_total->total_skor_nilai = $update_total->total_skor_nilai + $skor;
            Auth::user()->total_skor_nilai = Auth::user()->total_skor_nilai + $skor;
            $update_total->timestamps = false;
            $update_total->save();

            return redirect(route('home'))->with($data);
        } else {
            dd("masih salah");
        }
    }
}
