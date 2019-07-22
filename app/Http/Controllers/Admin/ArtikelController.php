<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Artikel;
use App\User;
use App\Lawyers;

class ArtikelController extends AdminController
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
      
        $massage=[
            'required'=>'Ada atribut yangmasih kosong, Silahkan di isi',
            'min'=>'Setidaknya Isi 5 karakter judul/255 karakter untuk isi artikel'
        ];
        $this->validate($request, [
            'title' => ['required', 'string', 'min:5'],
            'ckedtor' => ['required', 'string', 'min:5'],
            'fotocover'=>['required'],            
        ],$massage);
       
        $user = auth()->user();
        
        $artikel = new Artikel;                
        $artikel->judul_artikel = $request->title;
        $artikel->isi_artikel = $request->ckedtor;
        $artikel->id_admin = $user->id_admin;
        $artikel->username =$user->username;
        

        if($request->hasFile('fotocover')){
            $image =$request ->file('fotocover');
            $filename='cover'.time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/cover/'.$filename);
            Image::make($image)->resize(100,100)->save($location);
            $artikel->foto=$filename;            
            $artikel->save();
        }
       
        return redirect()->route('form.create')->with('sukses','Artikel Berhasil Di Publish');     
    }
    
    
}
