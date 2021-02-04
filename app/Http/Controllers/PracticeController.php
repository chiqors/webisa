<?php

namespace App\Http\Controllers;

use App\Models\Answer_Practice;
use Illuminate\Http\Request;
use App\Models\Practice;
use App\Models\User;
use Auth;

class PracticeController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Practice'
        );
        return view('practice')->with($data);
    }

    public function kategori($kategori)
    {
        $data_get = Practice::where('kategori', $kategori)->get();
        $data = array(
            'practices' => $data_get,
            'title' => $kategori
        );
        return view('practice_kategori')->with($data);
    }

    public function question($question)
    {
        $data_get = Practice::find($question);
        $data = array(
            'practice' => $data_get,
            'title' => 'Practice - '.$data_get->judul_practice
        );
        return view('practice_question')->with($data);
    }

    public function answer(Request $request, $id)
    {
        $request->validate([
            'answer' => 'required',
        ],[
            'answer.required' => 'Jawaban Harus Diisi!',
        ]);

        $skor = 0;
        $verify_answer = Practice::find($id);
        if ($verify_answer->jawaban == $request->input('answer')) {
            $skor = $verify_answer->skor_nilai;
            Answer_Practice::create([
                'user_id' => Auth::user()->id,
                'practice_id' => $id,
                'jawaban_siswa' => $request->input('answer'),
                'skor_nilai' => 10
            ]);
            $data = [
                'practice_skor' => $skor,
                'practice_judul' => $verify_answer->judul_practice,
                'practice_time' => $request->input('timer')
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
