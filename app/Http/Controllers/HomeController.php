<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Home'
        );
        return view('home')->with($data);
    }
}
