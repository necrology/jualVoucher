<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualVoucherController extends Controller
{
    public function dashboard(){
        return view('dashboard.dashboard');
    }
    
    public function generate(){
        return view('dashboard.generate');
    }
}
