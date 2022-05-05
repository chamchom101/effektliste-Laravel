<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view () {

        return view('admin');
    }

    public function index() {

        return view('admin.dashboard');
    }

    public function login (Request $request) {

        $this->validate($request, [

            'email' => 'required',
            'password' => 'required',

        ]);


        //dd(auth()->attempt($request->only('email', 'password')));

       if (!auth()->attempt($request->only('email', 'password'))) {

          return back();

       } 

       return redirect()->route('admin.dashboard');
    }
}
