<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $tes = "testing";
        $tes1 = "On my way";
        return view('profile', compact('tes'));
    }
}
