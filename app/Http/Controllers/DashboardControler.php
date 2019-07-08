<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\admin_web;

class DashboardControler extends Controller
{
    //
    public function dashboard(){

        return view('dashboard.wall-dashboard');
    }

    // public function form_show(){

    //     return view('artikelhukum');     
    // }

    

    public function form_create(){
                
        $title = artikel::get();        

    return view('dashboard.form', compact('title'));     
}

    public function form_pref(){

        return view('detailartikel');     
    }
    
}
