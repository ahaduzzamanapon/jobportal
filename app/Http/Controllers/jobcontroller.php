<?php

namespace App\Http\Controllers;

use App\Models\catmodel;
use App\Models\employ;
use App\Models\jobmodel;
use App\Models\locationmodel;
use App\Models\settings;
use App\Models\user;
use Illuminate\Http\Request;
use Session;

class jobcontroller extends Controller
{
    public function dashbord()
    {
        $job = jobmodel::all();
        $cat = catmodel::all();
        $location = locationmodel::all();
        $employ = employ::all();
        $user = user::all();

        $jobcount = count($job);
        $catcount = count($cat);
        $locationcount = count($location);
        $employcount = count($employ);
        $usercount = count($user);

        return view('admin/index', compact('jobcount', 'catcount', 'locationcount', 'usercount', 'employcount'));
    }

    public function settings()
    {
        $data = settings::find(1);

        return view('admin/settings', compact('data'));
    }

    public function updatesettings(Request $request)
    {
        $settings = settings::find(1);
        $settings->sitename = $request->sitename;
        $settings->titelname = $request->titelname;
        $settings->save();
        Session::flash('msg', 'Data Updated');

        return redirect('admin/settings');
    }

    public function cattbl()
    {
        $showdata = catmodel::orderBy('id', 'DESC')->paginate(5);

        $showdatacout = count($showdata);

        return view('admin/cattbl', compact('showdata', 'showdatacout'));
    }

    public function addcat()
    {
        return view('admin/addcat');
    }

    public function catstor(Request $request)
    {
        $ruls = [
            'catname' => 'required',
        ];
        $this->validate($request, $ruls);

        $data = $request->catname;

        $chackd = catmodel::where('catname', 'LIKE', '%'.$data.'%')->get();
        $cchackd = count($chackd);

        if ($cchackd == 0) {
            $catmodel = new catmodel();
            $catmodel->catname = $request->catname;
            $catmodel->save();
            Session::flash('msg', 'Data Added successful');

            return redirect('admin/cattbl');
        }
        Session::flash('msg', 'Data Already have');

        return redirect('admin/addcat');
    }

    public function editcat($id = null)
    {
        $data = catmodel::find($id);

        return view('/admin/editcatdata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $ruls = [
            'catname' => 'required',
        ];
        $this->validate($request, $ruls);

        $catmodel = catmodel::find($id);
        $catmodel->catname = $request->catname;
        $catmodel->save();
        Session::flash('msg', 'Data Added Updated');

        return redirect('admin/cattbl');
    }

    public function delletdata(Request $request, $id)
    {
        $catmodel = catmodel::find($id);

        $catmodel->delete();
        Session::flash('msg', 'Data succesfully Delleted');

        return redirect('admin/cattbl');
    }

    // job managme

    // public function joblist()
    // {
    //     $showdata = jobmodel::orderBy('id', 'DESC')->paginate(10);

    //     $catdata = catmodel::all();

    //     $showdatacout = count($showdata);

    //     return view('/admin/joblist', compact('showdata', 'showdatacout', 'catdata'));
    // }

    public function joblist()
    {
        // $showdata = jobmodel::join('catmodels', 'jobmodels.id', '=', 'catmodels.id')
        //             ->select('jobmodels.*', 'catmodels.catname')
        //             ->orderBy('id', 'DESC')->paginate(10);

        $showdata = jobmodel::join('catmodels', 'catmodels.id', '=', 'jobmodels.jobcategories')
        ->select('jobmodels.*', 'catmodels.catname')
        ->orderBy('id', 'DESC')->paginate(10);

        $showdatacout = count($showdata);

        return view('/admin/joblist', compact('showdata', 'showdatacout'));
    }

    // public function pandingjob()
    // {
    //     $catdata = catmodel::all();
    //     $data = 0;
    //     $showdata = jobmodel::where('jobstutus', 'LIKE', '%'.$data.'%')->paginate(10);

    //     $showdatacout = count($showdata);

    //     return view('/admin/joblist', compact('showdata', 'showdatacout', 'catdata'));
    // }
    public function pandingjob()
    {
        $catdata = catmodel::all();
        $data = 0;
        $showdata = jobmodel::join('catmodels', 'jobmodels.id', '=', 'catmodels.id')

        ->select('jobmodels.*', 'catmodels.catname')
        ->where('jobstutus', 'LIKE', '%'.$data.'%')
        ->orderBy('id', 'DESC')->paginate(10);

        $showdatacout = count($showdata);

        return view('/admin/joblist', compact('showdata', 'showdatacout', 'catdata'));
    }

    // public function approvejob()
    // {
    //     $catdata = catmodel::all();
    //     $data = 1;
    //     $showdata = jobmodel::where('jobstutus', 'LIKE', '%'.$data.'%')->paginate(10);

    //     $showdatacout = count($showdata);

    //     return view('/admin/joblist', compact('showdata', 'showdatacout', 'catdata'));
    // }
    public function approvejob()
    {
        $catdata = catmodel::all();
        $data = 1;
        $showdata = jobmodel::join('catmodels', 'jobmodels.id', '=', 'catmodels.id')

        ->select('jobmodels.*', 'catmodels.catname')
        ->where('jobstutus', 'LIKE', '%'.$data.'%')
        ->orderBy('id', 'DESC')->paginate(10);

        $showdatacout = count($showdata);

        return view('/admin/joblist', compact('showdata', 'showdatacout', 'catdata'));
    }

    public function viewjob($id)
    {
        $data = jobmodel::find($id);

        return view('/admin/viewjob', compact('data'));
    }

    public function aprovejob($id)
    {
        $jobmodel = jobmodel::find($id);
        $jobmodel->jobstutus = 1;
        $jobmodel->save();
        Session::flash('msg', 'Job Approve');

        return redirect('/admin/joblist');
    }

    public function disablejob($id)
    {
        $jobmodel = jobmodel::find($id);
        $jobmodel->jobstutus = 0;
        $jobmodel->save();
        Session::flash('msg', 'Job Disable');

        return redirect('/admin/joblist');
    }

    public function delletjob($id)
    {
        $jobmodel = jobmodel::find($id);

        $jobmodel->delete();
        Session::flash('msg', 'Data succesfully Delleted');

        return redirect('/admin/joblist');
    }

    // manage location
    public function locationtbl()
    {
        $showdata = locationmodel::orderBy('id', 'DESC')->paginate(5);

        $showdatacout = count($showdata);

        return view('/admin/location', compact('showdata', 'showdatacout'));
    }

    public function addlocation()
    {
        return view('admin/addlocation');
    }

    public function locationstor(Request $request)
    {
        $ruls = [
            'location' => 'required',
        ];
        $this->validate($request, $ruls);

        $data = $request->location;

        $chackd = locationmodel::where('location', 'LIKE', '%'.$data.'%')->get();
        $cchackd = count($chackd);

        if ($cchackd == 0) {
            $locationmodel = new locationmodel();
            $locationmodel->location = $request->location;
            $locationmodel->save();
            Session::flash('msg', 'Data Added successful');

            return redirect('admin/location');
        }
        Session::flash('msg', 'Data Already have');

        return redirect('admin/addlocation');
    }

    public function editlocation($id = null)
    {
        $data = locationmodel::find($id);

        return view('/admin/editlocation', compact('data'));
    }

    public function updatelocation(Request $request, $id)
    {
        $ruls = [
            'location' => 'required',
        ];
        $this->validate($request, $ruls);

        $locationmodel = locationmodel::find($id);
        $locationmodel->location = $request->location;
        $locationmodel->save();
        Session::flash('msg', 'Data Added Updated');

        return redirect('admin/location');
    }

public function delletlocation(Request $request, $id)
{
    $locationmodel = locationmodel::find($id);

    $locationmodel->delete();
    Session::flash('msg', 'Data succesfully Delleted');

    return redirect('admin/location');
}

public function userlist()
{
    $showdata = user::orderBy('id', 'DESC')->paginate(5);

    $showdatacout = count($showdata);

    return view('admin/userlist', compact('showdata', 'showdatacout'));
}

public function delletuserdata(Request $request, $id)
{
    $catmodel = user::find($id);

    $catmodel->delete();
    Session::flash('msg', 'Data succesfully Delleted');

    return redirect('admin/userlist');
}

public function employlist()
{
    $showdata = employ::orderBy('id', 'DESC')->paginate(5);

    $showdatacout = count($showdata);

    return view('admin/employeelist', compact('showdata', 'showdatacout'));
}

public function delletemploydata(Request $request, $id)
{
    $catmodel = employ::find($id);

    $catmodel->delete();
    Session::flash('msg', 'Data succesfully Delleted');

    return redirect('admin/employlist');
}

public function adminlogin()
{
    return view('auth/adminlogin');
}
}
