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
        
        $artikel = new Artikel;
        $admin = new User;        
        $artikel->judul_artikel = $request->title;
        $artikel->isi_artikel = $request->ckedtor;
        $artikel->id_admin = 1 ;
        $artikel->foto = 'profile-manager.jpg'; 	
        $artikel->save();
        
        return redirect()->route('form.create');     
    }

    
    
}
