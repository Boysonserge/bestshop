<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ckeditorController extends Controller
{
    public function index(){
        return view('ckeditor');
    }
}
