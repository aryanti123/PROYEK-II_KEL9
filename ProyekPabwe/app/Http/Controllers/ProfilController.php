<?php

namespace App\Http\Controllers;
use App\Models\Profil;
// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil() {
        $profil = Profil::get();
        return view('profil', compact('profil'));
    }
}

