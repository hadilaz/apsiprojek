<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if (Auth::user()->hasRole('dosen')) {
            return view('dosen.dashboard');
          }elseif (Auth::user()->hasRole('mahasiswa')) {
            return view('mahasiswa.dashboard');
          }else{ 
            return view('dashboard');
        }

    }
    

}
