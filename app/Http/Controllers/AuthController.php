<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        Session::flash('email',$request->email);
        $infologin = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        if(Auth::attempt($infologin)){
            return redirect('/product')->with('success', 'Berhasil Login');
        } else {
            return redirect('/')->withErrors('Username dan Password yang dimasukkan tidak valid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout');
    }

    function register(){
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Session::flash('name',$request->name);
        Session::flash('email',$request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ],[
            'name.required'=>'Nama wajib diisi',
            'email.required'=>'Email wajib diisi',
            'email.email'=>'Masukkan Email yang valid',
            'email.unique'=>'Email telah digunakan',
            'password.required'=>'Password wajib diisi',
            'password.min'=>'Password minimal 6 char'
        ]);

        $register = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($register);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if(Auth::attempt($infologin)){
            return redirect('/product')->with('success', Auth::user()->name.'Berhasil Login');
        } else {
            return redirect('/')->withErrors('Username dan Password yang dimasukkan tidak valid');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
