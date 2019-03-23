<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subjectController extends Controller
{
    public function index(){
        return view('subjects.index');
    }
    public function java(){
        return view('subjects.java');
    }
    public function php(){
        return view('subjects.php');
    }
    public function web(){
        return view('subjects.web');
    }
    public function japanese(){
        return view('subjects.japanese');

    }

}
