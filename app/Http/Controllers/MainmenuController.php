<?php

namespace App\Http\Controllers;

use App\Models\Mainmenu;
use Illuminate\Http\Request;

class MainmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
        $this->middleware('auth');
        $this->middleware('blacklist');
        $this->middleware('superadmincheck');

    }

    public function index()
    {
        //
        return view('layouts.admins.mainmenu.list');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.admins.mainmenu.create');
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

        Mainmenu::create($data);

        return back()->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function show(Mainmenu $mainmenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Mainmenu $mainmenu)
    {
        //
        $data = $mainmenu;
        return view('layouts.admins.mainmenu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mainmenu $mainmenu)
    {
        //
        $data = $this->validateRequest();
        $mainmenu->update($data);
        return redirect()->route('mainmenus.index')->with('update', 'Data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mainmenu  $mainmenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mainmenu $mainmenu)
    {
        //
        if($mainmenu->submenus()->count())
        {
            return back()->with('fail', 'This menu can not be deleted . You can disable it ');
        }
        $mainmenu->delete();
        return back()->with('success', 'Data Deleted');
    }


    public function validateRequest()
    {

        $data = request()->validate([

            'main_name' => 'required',
            'serial' => 'required',
            'status' => 'required',

        ]);

        return $data;

    }


    public function active(Request $request, Mainmenu $mainmenu)
    {

        $mainmenu->status = "active";
        $mainmenu->save();
        return back()->with('update','Data Updated');
    }

    public function disable(Request $request, Mainmenu $mainmenu)
    {

        $mainmenu->status = "disable" ;
        $mainmenu->save();
        return back()->with('update','Data Updated');
    }

    public function actionView()
    {
        //
        return view('layouts.admins.mainmenu.disablelist');
    }

}
