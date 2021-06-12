<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Gig;
use App\Models\Project;
use App\Models\Submenu;
use App\Models\Mainmenu;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    //

    public function index()
    {

        return view('layouts.normal.home');
    }

    public function login()
    {
        $country = Country::all();
        return view('layouts.normal.login.login', compact('country'));
    }

    public function signup()
    {
        $country = Country::all();
        return view('layouts.normal.login.signup', compact('country'));
    }

    public function confirmSignUp(Request $request)
    {
        $name = $request->name;
        $contact = $request->mobile;
        $country = $request->country;
        $mobile = $country . $contact;

        $callingCode = ltrim($country, '+');
        $countryName = Country::where('phonecode', $callingCode)->get()->first();

        $code = rand(1000, 9999);

        $request->session()->put('code', $code);
        $request->session()->put('countryName', $countryName);
        $request->session()->put('mobile', $mobile);
        $request->session()->put('name', $name);

        return redirect()->route('home.validsignup');

    }

    public function valideSignUp(Request $request)
    {
        if (($request->session()->has('name')) && ($request->session()->has('countryName')) && ($request->session()->has('mobile')) && ($request->session()->has('code'))) {
            //

            $name = $request->session()->get('name');
            $countryName = $request->session()->get('countryName');
            $mobile = $request->session()->get('mobile');
            $code = $request->session()->get('code');

            return view('layouts.normal.login.confirmreg', compact('name', 'mobile', 'code', 'countryName'));
        }

        return redirect()->route('home.signup');

    }

    public function showAllGig()
    {
        $data = Gig::where('status', 'active')->get();
        return view('layouts.common.gig.showgig', compact('data'));
    }

    public function descripGig(Gig $gig)
    {
        $jobInstance = $gig;

        return view('layouts.common.gig.desgigshow', compact('jobInstance'));
    }

    public function searchGig(Request $request)
    {


        $searchobj = $request->gigsearch;

        $data = Gig::where('heading', 'LIKE', '%' . $request->gigsearch . '%')->get();

        return view('layouts.common.gig.showgig', compact('data'));
    }

    public function validateRequest()
    {

        $data = request()->validate([

            'gigsearch' => 'required',

        ]);

        return $data;

    }

    //projects


    public function searchProject(Request $request)
    {

         return redirect()->route('home.searchprojectget',  $request->projectsearch);

    }

    public function searchProjectget(Request $request, $search)
    {


        $searchobj = $search;

        $projectdetails = Project::where('heading', 'LIKE', '%' . $searchobj . '%')->paginate(20);

        return view('layouts.normal.project.home', compact('projectdetails'));




    }




    public function showAllProject()
    {
        $projectdetails = Project::orderBy('id', 'desc')->paginate(20);
        $projectdetailshome = Project::where('pintohome','yes')
                                        ->whereDate('pindatehome','>=', Carbon::now())
                                        ->orderBy('id', 'desc')
                                        ->get();

        return view('layouts.normal.project.home', compact('projectdetails','projectdetailshome'));
    }

    public function describeProject(Project $project)
    {
        $date1 = Carbon::create($project->enddate);
        $date2 = Carbon::now();

        $result = $date2->gt($date1);

        $project->increment('view',1);


        if($result)
        {
            $data['proposal'] = "no";
            $project->update($data);
        }

        $jobInstance = $project;
        $value = $project;

        return view('layouts.normal.project.desproject', compact('jobInstance', 'value'));
    }


    public function showMainProject(Mainmenu $mainmenu)
    {

        $projectdetails = $mainmenu->projects()->orderBy('id', 'desc')->paginate(20);

        $projectdetailshome = Project::where('pintocategory','yes')
                                        ->whereDate('pindatecategory','>=', Carbon::now())
                                        ->orderBy('id', 'desc')
                                        ->get();

        $getsubmenu = Submenu::where('mainmenu_id', $mainmenu->id)->get();

        return view('layouts.normal.project.subhome', compact('projectdetails', 'getsubmenu','projectdetailshome'));
    }

    public function showSubProject(Submenu $submenu)
    {

        $projectdetailshome = array();

        $projectdetails = $submenu->projects()->orderBy('id', 'desc')->paginate(20);


        $getsubmenu = Submenu::where('mainmenu_id', $submenu->mainmenu_id)->get();

        return view('layouts.normal.project.subhome', compact('projectdetails', 'getsubmenu','projectdetailshome'));
    }

}
