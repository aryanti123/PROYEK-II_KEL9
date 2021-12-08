<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // baru
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function proses_login(Request $request)
    {
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'editor') {
                return redirect()->intended('editor');
            }
            return redirect('/');
        }
        return redirect('login')->withSuccess('Oppes! Silahkan Cek Inputanmu');
    }
    public function register(Request $request)
    {
        return view('register');
    }
    public function dashboard(Request $request)
    {
        return view('dashboard');
    }
    public function lostform(Request $request)
    {
        return view('lostform');
    }
    public function foundform(Request $request)
    {
        return view('foundform');
    }
    public function history(Request $request)
    {
        return view('history');
    }
    public function editItemFound(Request $request)
    {
        return view('editItemFound');
    }
    public function editItemLost(Request $request)
    {
        return view('editItemLost');
    }
    public function help(Request $request)
    {
        return view('help');
    }
    public function allItemLost(Request $request)
    {
        return view('allItemLost');
    }
    public function allItemFound(Request $request)
    {
        return view('allItemFound');
    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}