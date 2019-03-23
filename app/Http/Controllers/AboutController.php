<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("abouts.index");
    }

    public function kimschool()
    {
        return view('abouts.kimschool');
    }

    public function teacher()
    {
        return view('abouts.teacher');
    }
}
