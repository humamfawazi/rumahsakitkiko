<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view("sesi/index");
    }

    public function loginkaryawan(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ],[
        'email.required' => '*Email wajib diisi',
        'password.required' => '*Password wajib diisi',
    ]);

    $infologin = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (Auth::attempt($infologin)) {
        return redirect('home')->with('success ', 'Berhasil Login!');
    } else {
        return back()->withErrors(['loginkaryawan' => 'Email atau password salah'])->withInput();
    }
   
}
    public function home()
    {
        return view("sesi/home"); 
    } 
    public function perawat()
    {
        return view('perawat/inputdata_perawat');
    }

    public function selamatdatang()
    {
        return view("selamatdatang"); 
    }

}
