<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function analytics(){
        return view('analytics',[
            'halaman' => 'GoWell : Analytics',
            'css' => 'analytics.css'
        ]);
    }
    public function profile(){
        return view('profile',[
            'halaman' => 'GoWell : Profile',
            'css' => 'profile.css',
            'user' => Auth::user(),
        ]);
    }
    public function setting(){
        return view('settings',[
            'halaman' => 'GoWell : Settings',
            'css' => 'settings.css',
            'user' => Auth::user(),
        ]);
    }
    public function support(){
        return view('support',[
            'halaman' => 'GoWell : Support',
            'css' => 'support.css'
        ]);
    }
    public function editPhoto(Request $request, $id){
        $User = User::findOrFail($id);
        $User->profile_picture = $request->input('profile');
        $User->update();
        return redirect('/setting');

    }
    public function editName(Request $request, $id){
        $User = User::findOrFail($id);
        $User->fullname = $request->input('name');
        $User->update();
        return redirect('/setting');

    }
    public function editEmail(Request $request, $id){
        $User = User::findOrFail($id);
        $User->email = $request->input('email');
        $User->update();
        return redirect('/setting');

    }
    public function editPass(Request $request, $id){
        $User = User::findOrFail($id);
        $newdata = $request->input('pass');
        $User->password = bcrypt($newdata);
        $User->update();
        return redirect('/setting');

    }
}
