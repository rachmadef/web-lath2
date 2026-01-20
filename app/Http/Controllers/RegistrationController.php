<?php

namespace App\Http\Controllers;

use App\Models\RegistrationContent;

class RegistrationController extends Controller
{
    public function index()
    {
        $contents = RegistrationContent::all()->keyBy('key');

        return view('daftar', compact('contents'));
    }
}
