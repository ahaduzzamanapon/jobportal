<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\employ;
use App\Models\user;
use Hash;
use Illuminate\Http\Request;
use Session;

class authcontroller extends Controller
{
    // candidate
    public function registation()
    {
        return view('auth/registation');
    }

    public function adduser(Request $req)
    {
        $reqt = $req->optradio;
        if ($reqt == 'user') {
            $user = new user();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $save = $user->save();
            if ($save) {
                Session::flash('msg', 'Sign Up Succesfull, Please Sing In');
            }

            return redirect('/registation');
        }
        if ($reqt == 'employ') {
            $user = new employ();
            $user->companyname = $req->companyname;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $save = $user->save();
            if ($save) {
                Session::flash('msg', 'Sign Up Succesfull, Please Sing In');
            }

            return redirect('/registation');
        }
    }

    public function addemploy(Request $req)
    {
        $user = new employ();
        $user->companyname = $req->companyname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $save = $user->save();
        if ($save) {
            Session::flash('msg', 'Sign Up Succesfull, Please Sing In');
        }

        return view('auth.registationemploy');
    }

    public function login(Request $req)
    {
        $req->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $reqt = $req->optradio;
        if ($reqt == 'user') {
            $user = user::where('email', '=', $req->email)->first();

            if ($user) {
                // $userpass = user::where('password', Hash::make($req->password))->count();
                if (
                    Hash::check($req->password, $user->password)
                ) {
                    $req->session()->put('loginid', $user->id);

                    return redirect('/');
                } else {
                    Session::flash('msg', 'Invalid Password');

                    return redirect('/registation');
                }
            } else {
                Session::flash('msg', 'Invalid Email or Password');

                return redirect('/registation');
            }
        }

        if ($reqt == 'employ') {
            $user = employ::where('email', '=', $req->email)->first();

            if ($user) {
                // $userpass = user::where('password', Hash::make($req->password))->count();
                if (
                    Hash::check($req->password, $user->password)
                ) {
                    $req->session()->put('loginemployid', $user->id);

                    return redirect('/employedashboard');
                } else {
                    Session::flash('msg', 'Invalid Password');

                    return redirect('/registationemploy');
                }
            } else {
                Session::flash('msg', 'Invalid Email or Password');

                return redirect('/registationemploy');
            }
        }
    }

    public function loginemploy(Request $req)
    {
        $req->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $user = employ::where('email', '=', $req->email)->first();

        if ($user) {
            // $userpass = user::where('password', Hash::make($req->password))->count();
            if (
                Hash::check($req->password, $user->password)
            ) {
                $req->session()->put('loginemployid', $user->id);

                return redirect('/employedashboard');
            } else {
                Session::flash('msg', 'Invalid Password');

                return redirect('/registationemploy');
            }
        } else {
            Session::flash('msg', 'Invalid Email or Password');

            return redirect('/registationemploy');
        }
    }

    public function loginadmin(Request $req)
    {
        $req->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $user = admin::where('email', '=', $req->email)->first();

        if ($user) {
            // $userpass = user::where('password', Hash::make($req->password))->count();
            if (
                Hash::check($req->password, $user->password)
            ) {
                $req->session()->put('loginadminid', $user->id);

                return redirect('/admin');
            } else {
                Session::flash('msg', 'Invalid Password');

                return redirect('/adminlogin');
            }
        } else {
            Session::flash('msg', 'Invalid Email or Password');

            return redirect('/adminlogin');
        }
    }

    public function logout()
    {
        Session::forget('loginid');
        Session::forget('loginemployid');
        Session::forget('loginadminid');

        return redirect('/');
    }

    public function registationemploy()
    {
        return view('auth/registationemploy');
    }
}
