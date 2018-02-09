<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoomController extends Controller
{
    public function index(Request $request, $sub_domain)
    {
        return view('welcome', compact('sub_domain'));
    }
}
