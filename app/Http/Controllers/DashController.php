<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class DashController extends Controller
{
    public function dashboard()
    {
        return view('back.dash');
    }

    public function materi1()
    {
        return view('back.one');
    }

    public function materi2()
    {
        return view('back.two');
    }

    public function materi3()
    {
        return view('back.three');
    }

    public function training1()
    {
        return view('back.train1');
    }

    public function training2()
    {
        return view('back.train2');
    }

    public function training3()
    {
        return view('back.train3');
    }


}
