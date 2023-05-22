<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function index(){
        return view('signup');
    }
    public function store(Request $request){
        $validatedatae = $request->validate([
            'fullname'=>'required',
            'username'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $validatedatae['password'] = bcrypt($validatedatae['password']);
        User::create($validatedatae);

        return redirect('/login');
    }

}