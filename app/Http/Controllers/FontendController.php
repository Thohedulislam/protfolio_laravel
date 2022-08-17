<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function fontend(){
        return view('FontEnd.master');
    }
}
