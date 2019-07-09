<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
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

    public function form_pref(Request $request){

        $artikel = new Artikel;
        $artikel->id_jdl_artikel = 1;
        $artikel->judul_artikel = $request->title;
        $artikel->id_admin = 1;
        $artikel->save();
        
        return redirect()->route('form.create');     
    }
    
}
