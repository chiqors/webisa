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

    public function html()
    {
        $data = array(
            'title' => 'Explore'
        );
        return view('explore')->with($data);
    }

    public function css()
    {
        $data = array(
            'title' => 'Explore'
        );
        return view('explore')->with($data);
    }

    public function js()
    {
        $data = array(
            'title' => 'Explore'
        );
        return view('explore')->with($data);
    }

    public function php()
    {
        $data = array(
            'title' => 'Explore'
        );
        return view('explore')->with($data);
    }
}
