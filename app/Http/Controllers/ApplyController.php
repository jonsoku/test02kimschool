<?php

namespace App\Http\Controllers;

use App\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    public function index()
    {
        return view('applies.info');
    }

    public function store(Request $request)
    {
        $apply = new Apply();
        $apply->name = \request('name');
        $apply->age = \request('age');
        $apply->sns = \request('sns');
        $apply->gender = \request('gender');
        $apply->level = \request('level');
        $apply->visa = \request('visa');
        $apply->it = \request('it');
        $apply->user_id = Auth::user()->id;
        $apply->save();


        return redirect()->route('applySubjects.index');

    }
    public function show(Apply $apply)
    {
        //
    }

    public function edit(Apply $apply)
    {
        //
    }

    public function update(Request $request, Apply $apply)
    {
        //
    }

    public function destroy(Apply $apply)
    {
        //
    }
}
