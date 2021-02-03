<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Explore'
        );
        return view('explore')->with($data);
    }
}
