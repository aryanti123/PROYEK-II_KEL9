<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function viewIndex(){
        return view('lostandfound.index');
    }
    public function viewAllItemFound(){
        return view('lostandfound.allItemFound');
    }
    public function viewAllItemLost(){
        return view('lostandfound.allItemLost');
    }
    public function viewEditProfil(){
        return view('lostandfound.editProfil');
    }
    public function viewForgotPass(){
        return view('lostandfound.forgot-password');
    }
    public function viewFoundForm(){
        return view('lostandfound.foundform');
    }
    public function viewAbout(){
        return view('lostandfound.about');
    }
    public function viewHistory(){
        return view('lostandfound.history');
    }
    public function viewLogin(){
        return view('lostandfound.login');
    }
    public function viewLostForm(){
        return view('lostandfound.lostform');
    }
    public function viewProfil(){
        return view('lostandfound.profil');
    }
    public function viewRegister(){
        return view('lostandfound.register');
    }
    public function viewEditItemLost(){
        return view('lostandfound.editItemLost');
    }
    public function viewEditItemFound(){
        return view('lostandfound.editItemFound');
    }
}
