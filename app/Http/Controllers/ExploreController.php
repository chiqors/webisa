<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Home'
        );
        return view('explore')->with($data);
    }
}
