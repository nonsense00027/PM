<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function test(){
      return view('test.index');
    }
    public function index()
    {
        $accountabilities = \App\Accountability::all();
        return view('home', compact('accountabilities'));
    }

    public function register(){
      $users = \App\User::all();
      return view('register.index', compact('users'));
    }

    public function store(Request $request){
      // dd($request);
      $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:5', 'confirmed'],
        'role' =>['required', 'string']
      ]);
        $request->merge(['password' => Hash::make($request->password)]);
        // dd($request->all());
        \App\User::create($request->all());
        Alert::success('Success!', $request->name.' has been successfully added');
        return redirect()->back();
    }

    public function update(Request $request, \App\User $user){
      // dd($user);
      $request->validate([
        'password' => ['required', 'string', 'min:5', 'confirmed']
      ]);
      $request->merge(['password' => Hash::make($request->password)]);
      // dd($request->all());
      $user->update($request->all());
      Alert::success('Edit Success!');
      return redirect()->back();
    }
}
