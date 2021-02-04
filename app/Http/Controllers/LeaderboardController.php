<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LeaderboardController extends Controller
{
    public function index()
    {
        $data_get = User::orderBy('total_skor_nilai', 'desc')->get();
        $data = array(
            'users' => $data_get,
            'title' => 'Leaderboard'
        );
        return view('leaderboard')->with($data);
    }
}
