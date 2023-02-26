<?php

namespace App\Http\Controllers;

use App\Models\application;
use App\Models\catmodel;
use App\Models\employ;
use App\Models\jobmodel;
use App\Models\locationmodel;
use App\Models\user;
use Illuminate\Http\Request;
use Session;

class userindexcontroller extends Controller
{
    public function index()
    {
        $userdata = [];
        if (Session::has('loginid')) {
            $userdata = user::where('id', '=', Session::get('loginid'))->first();
        }
        $catdata = catmodel::all();
        $location = locationmodel::all();

        $data = 1;

        $jobdata = jobmodel::where('jobstutus', 'LIKE', '%'.$data.'%')->orderBy('id', 'DESC')->paginate(3);

        return view('index', compact('catdata', 'location', 'jobdata', 'userdata'));
    }

    public function userdasboard()
    {
        $userdata = [];
        if (Session::has('loginid')) {
            $userdata = user::where('id', '=', Session::get('loginid'))->first();
        }
        $userdataid = $userdata->name;

        $aplicant = application::where('username', 'LIKE', '%'.$userdataid.'%')->count();

        return view('userdasboard', compact('userdata', 'aplicant'));
    }

    public function userjobview($id)
    {
        $userdata = [];
        $progress = [];
        if (Session::has('loginid')) {
            $userdata = user::where('id', '=', Session::get('loginid'))->first();
            $progress = $userdata->progress;
        }
        $data = jobmodel::find($id);

        $employid = $data->employid;
        $employdata = employ::find($employid);

        return view('userjobview', compact('data', 'userdata', 'progress', 'employdata'));
    }

    public function userprofile()
    {
        $userdata = [];
        if (Session::has('loginid')) {
            $userdata = user::where('id', '=', Session::get('loginid'))->first();
        }

        $user = user::find($userdata->id);
        $progress = 0;
        if ($user->name) {
            $progress += 15;
        }
        if ($user->email) {
            $progress += 15;
        }

        if ($user->phone) {
            $progress += 7;
        }
        if ($user->educationlevels) {
            $progress += 7;
        }
        if ($user->age) {
            $progress += 7;
        }
        if ($user->languages) {
            $progress += 7;
        }
        if ($user->currentsalary) {
            $progress += 7;
        }
        if ($user->expectedsalary) {
            $progress += 7;
        }
        if ($user->completeaddress) {
            $progress += 7;
        }
        if ($user->facebook) {
            $progress += 7;
        }
        if ($user->linkedin) {
            $progress += 7;
        }
        if ($user->description) {
            $progress += 7;
        }
        $user->progress = $progress;
        $user->save();

        return view('userprofile', compact('userdata'));
    }

    public function userjoblist()
    {
        $userdata = [];
        if (Session::has('loginid')) {
            $userdata = user::where('id', '=', Session::get('loginid'))->first();
        }
        $catdata = catmodel::all();
        $location = locationmodel::all();
        $data = 1;

        $jobdata = jobmodel::where('jobstutus', 'LIKE', '%'.$data.'%')->orderBy('id', 'DESC')->paginate(10);

        return view('/userjoblist', compact('catdata', 'location', 'jobdata', 'userdata'));
    }

    public function updateprofile(Request $request, $id)
    {
        $userdata = [];
        if (Session::has('loginid')) {
            $userdata = user::where('id', '=', Session::get('loginid'))->first();
        }

        $user = user::find($id);
        $progress = 0;
        if ($user->name) {
            $progress += 15;
        }
        if ($user->email) {
            $progress += 15;
        }

        if ($user->phone) {
            $progress += 7;
        }

        if ($user->educationlevels) {
            $progress += 7;
        }
        if ($user->age) {
            $progress += 7;
        }
        if ($user->languages) {
            $progress += 7;
        }
        if ($user->currentsalary) {
            $progress += 7;
        }
        if ($user->expectedsalary) {
            $progress += 7;
        }
        if ($user->completeaddress) {
            $progress += 7;
        }
        if ($user->facebook) {
            $progress += 7;
        }
        if ($user->linkedin) {
            $progress += 7;
        }
        if ($user->description) {
            $progress += 7;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->image) {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images'), $imageName);
            $user->image = $imageName;
        }

        $user->phone = $request->phone;
        $user->currentsalary = $request->currentsalary;
        $user->expectedsalary = $request->expectedsalary;
        $user->educationlevels = $request->educationlevels;
        $user->age = $request->age;
        $user->languages = $request->languages;
        $user->description = $request->description;
        $user->completeaddress = $request->completeaddress;
        $user->facebook = $request->facebook;
        $user->linkedin = $request->linkedin;
        $user->progress = $progress;
        $user->save();
        Session::flash('msg', 'Data Succesfully Updated');

        return redirect('/userprofile');
    }

    public function joblist()
    {
        $userdata = [];
        if (Session::has('loginid')) {
            $userdata = user::where('id', '=', Session::get('loginid'))->first();
        }
        $catdata = catmodel::all();
        $location = locationmodel::all();
        $data = 1;

        $jobdata = jobmodel::where('jobstutus', 'LIKE', '%'.$data.'%')->orderBy('id', 'DESC')->paginate(10);
        $jobdatacount = count($jobdata);

        return view('/joblist', compact('catdata', 'location', 'jobdata', 'jobdatacount', 'userdata'));
    }

    public function searchdata(Request $request)
    {
        $userdata = [];
        if (Session::has('loginid')) {
            $userdata = user::where('id', '=', Session::get('loginid'))->first();
        }
        $catdata = catmodel::all();
        $location = locationmodel::all();
        $data = 1;
        $Keywords = $request->Keywords;
        $locations = $request->location;
        $catnames = $request->catname;

        $locationsp = locationmodel::find($locations);
        $catnamesp = catmodel::find($catnames);
        if ($locationsp) {
            $locationspl = $locationsp->location;
        } else {
            $locationspl = '';
        }

        if ($catnamesp) {
            $catnamespl = $catnamesp->catnames;
        } else {
            $catnamespl = '';
        }
        if ($Keywords) {
            $Keywordspl = $request->Keywords;
        } else {
            $Keywordspl = '';
        }

        if (! $catnames && ! $locations && ! $Keywords) {
            $jobdata = jobmodel::where('jobstutus', 'LIKE', '%'.$data.'%')->paginate(10);
        } elseif ($catnames && ! $locations && ! $Keywords) {
            $jobdata = jobmodel::where([
                'jobcategories' => $catnames,
                'jobstutus' => $data,
                // 'jobstutus', 'LIKE', '%'.$data.'%'

            ])->orderBy('id', 'DESC')->paginate(10);
        } elseif (! $catnames && ! $locations && $Keywords) {
            $jobdata = jobmodel::where([
                'jobtitle' => $Keywords,
                'jobstutus' => $data,
                // 'jobstutus', 'LIKE', '%'.$data.'%'

            ])->orderBy('id', 'DESC')->paginate(10);
        } elseif (! $catnames && $locations && ! $Keywords) {
            $jobdata = jobmodel::where([

                'jobcity' => $locations,

                'jobstutus' => $data,

            ])->orderBy('id', 'DESC')->paginate(10);
        } elseif ($catnames && $locations && ! $Keywords) {
            $jobdata = jobmodel::where([
                'jobcategories' => $catnames,
                'jobcity' => $locations,

                'jobstutus' => $data,

            ])->orderBy('id', 'DESC')->paginate(10);
        } elseif (! $catnames && $locations && $Keywords) {
            $jobdata = jobmodel::where([

                'jobcity' => $locations,
                'jobtitle' => $Keywords,

                'jobstutus' => $data,

            ])->orderBy('id', 'DESC')->paginate(10);
        } elseif ($catnames && $locations && ! $Keywords) {
            $jobdata = jobmodel::where([
                'jobcategories' => $catnames,
                'jobcity' => $locations,

                'jobstutus' => $data,

            ])->orderBy('id', 'DESC')->paginate(10);
        } elseif ($catnames && ! $locations && $Keywords) {
            $jobdata = jobmodel::where([
                'jobcategories' => $catnames,

                'jobtitle' => $Keywords,

                'jobstutus' => $data,

            ])->orderBy('id', 'DESC')->paginate(10);
        } elseif ($catnames && $locations && $Keywords) {
            $jobdata = jobmodel::where([
                'jobcategories' => $catnames,
                'jobcity' => $locations,
                'jobtitle' => $Keywords,

                'jobstutus' => $data,

            ])->orderBy('id', 'DESC')->paginate(10);
        }
        $jobdatacount = count($jobdata);

        return view('/userjoblist', compact('catdata', 'location', 'userdata', 'jobdata', 'jobdatacount', 'Keywordspl', 'locationspl', 'catnamespl'));
    }

    public function apply($id)
    {
        $jobid = $id;
        $userdata = [];
        if (Session::has('loginid')) {
            $userdata = user::where('id', '=', Session::get('loginid'))->first();
        }

        return view('apply', compact('userdata', 'jobid'));
    }

    public function uplodecv(Request $request, $id)
    {
        $userdata = user::where('id', '=', Session::get('loginid'))->first();
        $data = jobmodel::find($id);

        $username = $userdata->name;
        $jobname = $data->jobtitle;
        $employid = $data->employid;

        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('cv'), $fileName);

        $application = new application();
        $application->jobname = $jobname;
        $application->username = $username;
        $application->employid = $employid;
        $application->cv = $fileName;

        $application->save();
        Session::flash('msg', 'Applyed Succesfull');

        return redirect('/userdasboard');
    }
}
