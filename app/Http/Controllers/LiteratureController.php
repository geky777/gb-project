<?php

namespace App\Http\Controllers;

class LiteratureController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function iliad()
    {
        return view('iliad');
    }

    public function colorPurple()
    {
        return view('color_purple');
    }

    public function oedipus()
    {
        return view('oedipus');
    }

    public function robert()
    {
        return view('robert');
    }
}
