<?php

namespace App\Http\Controllers;

use App\Apply;
use App\ApplySubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplySubjectController extends Controller
{
    public function index()
    {
        return view('applies.subject');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $applySubject = new ApplySubject();
        $applySubject->java1 = \request('java1');
        $applySubject->java2 = \request('java2');
        $applySubject->java3 = \request('java3');
        $applySubject->web1 = \request('web1');
        $applySubject->web2 = \request('web2');
        $applySubject->web3 = \request('web3');
        $applySubject->user_id = Auth::user()->id;
        $applySubject->save();

        return view('applies.index');

    }

    public function show(ApplySubject $applySubject)
    {
        //
    }

    public function edit(ApplySubject $applySubject)
    {
        //
    }

    public function update(Request $request, ApplySubject $applySubject)
    {
        //
    }

    public function destroy(ApplySubject $applySubject)
    {
        //
    }
}
