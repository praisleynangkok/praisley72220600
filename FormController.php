<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showFormA()
    {
        return view('form-a');
    }

    public function showFormB(Request $request)
    {
        $data = $request->all();
        return view('form-b', compact('data'));
    }
}

