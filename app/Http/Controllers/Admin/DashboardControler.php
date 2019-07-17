<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Artikel;
use App\User;
use App\Lawyers;

class DashboardControler extends AdminController
{
    //
    public function dashboard(){
        
        return view('dashboard.index');
    }

    // public function form_show(){

    //     return view('artikelhukum');     
    // }

    

    public function form_create(){
                
        $title = Artikel::get();        

        return view('dashboard.form', compact('title','ckedtor'));     
    }

    public function form_pref(Request $request){
        $user = auth()->user();
        
        $artikel = new Artikel;                
        $artikel->judul_artikel = $request->title;
        $artikel->isi_artikel = $request->ckedtor;
        $artikel->id_admin = $user->id_admin;
        $artikel->username =$user->username;
        $artikel->foto = 'profile-manager.jpg'; 	
        $artikel->save();
        
        return redirect()->route('form.create');     
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    
}
