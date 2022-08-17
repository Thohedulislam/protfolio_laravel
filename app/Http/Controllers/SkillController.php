<?php

namespace App\Http\Controllers;

use App\Models\skills;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $skls = skills::get();
        return view('BackEnd.skills',compact('skls'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
            $Dskills = new skills;
            $Dskills->skills_desp = $request->skills_desp;
            $Dskills->s_title = $request->s_title;
            $Dskills->perscnts = $request->perscnts;
            $Dskills->save();

            return back()->with('sms','Done');
    }

    /**
     * Display the specified resource.
     *
     */
    public function list()
    {
        $skls = skills::get();
        return view('BackEnd.skill_list',compact('skls'));
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $skls = skills::find($id);
        $skls->delete();

        return back();

    }
}
