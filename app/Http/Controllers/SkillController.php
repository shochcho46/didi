<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class SkillController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
        $this->middleware('auth');
        $this->middleware('blacklist');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Skill::orderBy('id', 'desc')->get();
        return view('layouts.admins.skill.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.admins.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $this->validateRequest();

        Skill::firstOrCreate($data);

        return back()->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //
        $data = $skill;
        return view('layouts.admins.skill.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //
        $data = $this->validateRequest();
        $skill->update( $data);
        return redirect()->route('skills.index')->with('success','Data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
        $skill->delete();
        return back()->with('delete', 'Data Deleted');
    }

    public function validateRequest()
    {

        $data = request()->validate([

            'skill_name' => 'required',


        ]);

        return $data;

    }

    public function autocomplete(Request $request)
    {
        $searchInput = $request->input('skill_name');

        $ndata = Skill::select("skill_name")
                ->where("skill_name","LIKE","%{$searchInput}%")
                ->get();

                $dataModified = array();
                foreach ($ndata as $data)
                {
                  $dataModified[] = $data->skill_name;
                }

        return response()->json($dataModified);
    }
}
