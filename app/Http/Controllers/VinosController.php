<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VinosController extends Controller
{
    public function index(){
        return view('vino');
    }
}
