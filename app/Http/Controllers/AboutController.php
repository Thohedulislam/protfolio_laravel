<?php

namespace App\Http\Controllers;

use App\Models\abouts;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // get all date

    public function index(){
        $date = abouts::get();

        return view('BackEnd.about',compact('date'));
    }

// store || instert data

    public function store(Request $request)
    {
        $data = new abouts;
        $data->about_desp = $request->about_desp;
        $data->title2 = $request->title2;
        $data->desp2 = $request->desp2;

        $data->save();


        return back()->with('sms','Done');
    }

//view-list backend

    public function list(){
        $date = abouts::get();

        return view('BackEnd.aboutlist',compact('date'));
    }

//destroy any || delete

    public function destroy($id){

        $date = abouts::find($id);

        $date->delete();

        return back();
    }
}
