<?php

namespace App\Http\Controllers;

use App\Models\application;
use App\Models\catmodel;
use App\Models\employ;
use App\Models\jobmodel;
use App\Models\locationmodel;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class employecontroller extends Controller
{
    public function employedashboard()
    {
        $employ = employ::where('id', '=', Session::get('loginemployid'))->first();
        $employid = $employ->id;

        $aplicants = application::where('employid', 'LIKE', '%'.$employid.'%')->count();

        $jobcount = jobmodel::where('employid', 'LIKE', '%'.$employ->id.'%')->count();
        $progress = $employ->progress;

        return view('employe/employedashboard', compact('employ', 'jobcount', 'progress', 'aplicants'));
    }

    public function companyprofile()
    {
        $location = locationmodel::all();

        $employ = employ::where('id', '=', Session::get('loginemployid'))->first();
        $locationdata = [];

        if ($employ->city) {
            $locationdata = locationmodel::find($employ->city);
        }

        $progress = 0;
        if ($employ->companyname) {
            $progress += 15;
        }
        if ($employ->email) {
            $progress += 10;
        }

        if ($employ->phone) {
            $progress += 10;
        }

        if ($employ->website) {
            $progress += 15;
        }
        if ($employ->aboutcompany) {
            $progress += 10;
        }
        if ($employ->city) {
            $progress += 10;
        }
        if ($employ->completeaddress) {
            $progress += 10;
        }

        if ($employ->facebook) {
            $progress += 10;
        }
        if ($employ->linkedin) {
            $progress += 10;
        }
        $employ->progress = $progress;
        $employ->save();

        return view('employe/companyprofile', compact('employ', 'location', 'locationdata'));
    }

    public function updateprofileemploy(Request $request, $id)
    {
        $employ = employ::where('id', '=', Session::get('loginemployid'))->first();

        $progress = 0;
        if ($employ->companyname) {
            $progress += 11;
        }
        if ($employ->email) {
            $progress += 10;
        }

        if ($employ->phone) {
            $progress += 10;
        }

        if ($employ->website) {
            $progress += 10;
        }
        if ($employ->aboutcompany) {
            $progress += 10;
        }
        if ($employ->city) {
            $progress += 10;
        }
        if ($employ->completeaddress) {
            $progress += 10;
        }

        if ($employ->facebook) {
            $progress += 10;
        }
        if ($employ->linkedin) {
            $progress += 10;
        }

        $employ->companyname = $request->companyname;
        $employ->email = $request->email;
        if ($request->image) {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images'), $imageName);
            $employ->image = $imageName;
        }

        $employ->phone = $request->phone;
        $employ->website = $request->website;
        $employ->aboutcompany = $request->aboutcompany;

        $employ->city = $request->city;
        $employ->completeaddress = $request->completeaddress;
        $employ->facebook = $request->facebook;
        $employ->linkedin = $request->linkedin;
        $employ->progress = $progress;
        $employ->save();
        Session::flash('msg', 'Data Succesfully Updated');

        return redirect('/companyprofile');
    }

    public function postjob()
    {
        $employ = employ::where('id', '=', Session::get('loginemployid'))->first();
        $progress = $employ->progress;
        $showdata = catmodel::all();
        $showlocation = locationmodel::all();

        return view('employe/postjob', compact('showdata', 'showlocation', 'progress'));
    }

    public function jobstor(Request $request)
    {
        // $ruls = [
        //     'catname' => 'required',
        //     'catname' => 'required',
        //     'catname' => 'required',
        //     'catname' => 'required',
        //     'catname' => 'required',
        //     'catname' => 'required',
        //     'catname' => 'required',
        //     'catname' => 'required',
        // ];
        // $this->validate($request, $ruls);
        $employ = employ::where('id', '=', Session::get('loginemployid'))->first();

        $jobmodel = new jobmodel();
        $jobmodel->jobtitle = $request->jobtitle;
        $jobmodel->jobdescription = $request->jobdescription;
        $jobmodel->jobcompany = $request->jobcompany;
        $jobmodel->jobeducation = $request->jobeducation;
        $jobmodel->jobresponsibilities = $request->jobresponsibilities;
        $jobmodel->jobstutus = 0;
        $jobmodel->jobemail = $request->jobemail;
        $jobmodel->jobcategories = $request->jobcategories;
        $jobmodel->offeredsalary = $request->offeredsalary;
        $jobmodel->jobexperience = $request->jobexperience;
        $jobmodel->jobgender = $request->jobgender;
        $jobmodel->deadline = $request->deadline;
        $jobmodel->jobcity = $request->jobcity;
        $jobmodel->jobaddress = $request->jobaddress;
        $jobmodel->employid = $employ->id;

        $jobmodel->save();
        Session::flash('msg', 'Job Posted');

        return redirect('/employedashboard');
    }

    public function managejob()
    {
        $employ = employ::where('id', '=', Session::get('loginemployid'))->first();
        $employid = $employ->id;

        $showdata = jobmodel::join('catmodels', 'catmodels.id', '=', 'jobmodels.jobcategories')
        ->select('jobmodels.*', 'catmodels.catname')
        ->where('employid', 'LIKE', '%'.$employid.'%')
        ->orderBy('id', 'DESC')->paginate(10);

        $showdatacout = count($showdata);

        return view('/employe/managjob', compact('showdata', 'showdatacout'));
    }

    public function viewjob($id)
    {
        $data = jobmodel::find($id);

        return view('/employe/jobview', compact('data'));
    }

    public function delletjob($id)
    {
        $jobmodel = jobmodel::find($id);

        $jobmodel->delete();
        Session::flash('msg', 'Data succesfully Delleted');

        return redirect('/employe/managejob');
    }

    public function applicantslist()
    {
        $employ = employ::where('id', '=', Session::get('loginemployid'))->first();
        $employid = $employ->id;

        $showdata = application::where('employid', 'LIKE', '%'.$employid.'%')
        ->orderBy('id', 'DESC')->paginate(10);

        $showdatacout = count($showdata);

        return view('/employe/applicantslist', compact('showdata', 'showdatacout'));
    }

    public function downloadPdfFile($file): BinaryFileResponse
    {
        return response()->download(public_path('cv/'.$file));
    }
}
