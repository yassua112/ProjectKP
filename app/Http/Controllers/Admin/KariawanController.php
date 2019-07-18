<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\user;
use Image;
use App\Lawyers;
class KariawanController extends Controller
{
    public function index(){

        $lawyers = Lawyers::all();

        return view("dashboard.data",['lawyers'=>$lawyers]);
    }

    public function createForm(){

        $lawyers = Lawyers::get();

        return view('dashboard.create.create-kariawan-admin',compact('nama','email','nohp','Nip','gender','tentang'));
    }

    public function postkariawan(Request $request){

        $user =auth()->user();

        $lawyers = new lawyers;
    
        $lawyers->nama=$request->nama;
        $lawyers->email=$request->email;
        $lawyers->nohp=$request->nohp;
        $lawyers->NIP=$request->Nip;
        $lawyers->gender=$request->gender;
        $lawyers->SekilasTentang=$request->tentang;
        $lawyers->id_admin=$user->id_admin;


        //save images
        if($request->hasFile('FotoKariawan')){
            $image =$request ->file('FotoKariawan');
            $filename='kariawan'.time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/kariawan/'.$filename);
            Image::make($image)->resize(500,200)->save($location);
            $lawyers->Foto=$filename;
        }else{
        $lawyers->Foto='handeler-kariawan.jpg';
        }
       
        
        $lawyers->save();
        return redirect()->route('kariawan')->with('sukses','Data berhasil diTambahkan!');
    }

}
