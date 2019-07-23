<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\user;
use Image;
use App\Lawyers;
use Alert;
class LawyersController extends AdminController
{
    public function index(){ //metjod viwe dari tampilan utama dashboard penambahan kariawan

        $lawyers = Lawyers::all();

        return view("dashboard.data",['lawyers'=>$lawyers]);
    }

    public function createForm(){ //method create yang akan membaca masukan form

        $lawyers = Lawyers::get();

        return view('dashboard.create.create-kariawan-admin',compact('nama','email','nohp','Nip','gender','tentang'));
    }

    public function postkariawan(Request $request){ //method penambahan data lawyers
        //pengambilan data sesion ( data admin yang sedang login)
        $user =auth()->user();

        //Pengisian data lawyers
        $lawyers = new lawyers;    
        $lawyers->nama=$request->nama;
        $lawyers->email=$request->email;
        $lawyers->nohp=$request->nohp;
        $lawyers->NIP=$request->Nip;
        $lawyers->gender=$request->gender;
        $lawyers->SekilasTentang=$request->tentang;
        $lawyers->id_admin=$user->id_admin;

        //sintak untuk upload file CV
        $nama=$request->nama;
        $file=$request->file('CVfile');
        $namefile=$nama.'.'.$file->getClientOriginalExtension();
        $destination=public_path('cv-folder/');
        $file->move($destination,$namefile);
        $lawyers->fileCV=$namefile;
        //sintak untuk upload images
        if($request->hasFile('FotoKariawan')){ //pengecekan apakah form di isi foto atau tidak
            $image =$request ->file('FotoKariawan');
            $filename='kariawan'.time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/kariawan/'.$filename);
            Image::make($image)->resize(300,300)->save($location);
            $lawyers->Foto=$filename;
            $lawyers->save(); //data di simpan
        }else{ //jika tidak nama foto akan menggunakan foto defauld yang sudah tersedia di dalam assets
        $lawyers->Foto='handeler-kariawan.jpg';
        $lawyers->save(); //data di simpan
        }
        Alert::success('Berhasil', 'Data Berhasil Di Hapus')->persistent("Ok");//menampilkan pesan berhasil jika data berhasil di tambahkan
        return redirect()->route('data');
    }


    public function view($id){
        
        $lawyers= Lawyers::find($id);

        return view('dashboard.view.viewlawyers',['data'=>$lawyers]);
    }

    public function edit($id){
        //Penganbilan data sesuai ID
        $lawyers= lawyers::find($id);
        return view('dashboard.edit.editdatalawyers',compact('lawyers'));

    }

    public function update(Request $request,$id){
        //memberikan validasi untuk pengisian data yang akan di update
        $this->validate($request,[
            'nama'=>'requared',
            'email'=>'requared',
            'nohp'=>'requared',
            'NIP'=>'requared',
            'gender'=>'requared',
            'SekilasTentang'=>'requared',
            'fileCV'=>'requared',
            'Foto'=>'requared',
        ]);
        $lawyers=Lawyers::find($id);
        Alert::success('Berhasil', 'Data Berhasil Di Hapus')->persistent("Ok");
        dd($request,$id);          
    }

    public function hapus($id){

        $lawyers=Lawyers::find($id);
        $lawyers->delete();
        Alert::success('Berhasil', 'Data Berhasil Di Hapus')->persistent("Ok");
        return redirect()->route('data');
    }
}