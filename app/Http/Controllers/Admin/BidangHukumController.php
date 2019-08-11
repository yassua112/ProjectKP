<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BidangHukum;
use Alert;
class BidangHukumController extends AdminController
{
    public function index()
    {
        $data_bidang_hukum = BidangHukum::all();
        return view('dashboard.table',['data_bidang_hukum'=>$data_bidang_hukum]);
    }
    public function tambah_bidanghukum()
    {
        $bidangHukum = BidangHukum::get();
        return view('dashboard.create.inputbidanghukum',compact('nama_bid_hukum','keterangan'));
    //  \App\BidangHukum::create($request->all());
    //  return redirect('/dashboard.table')->with('sukses','Data berhasil diinputkan!');
    }
    
    public function bidang_pref(Request $request)    {
        $user = auth()->user();
        $bidanghukum = new BidangHukum;
        $bidanghukum->nama_bid_hukum = $request->nama_bid_hukum;
        $bidanghukum->keterangan=$request->keterangan;
        $bidanghukum->id_admin=$user->id;
        $bidanghukum->save();
        Alert::success('Berhasil', 'Data Berhasil Di Tambahkan');
        return redirect()->route('table');
    }





    public function edit_bidanghukum($id) {
        $bidanghukum = BidangHukum::find($id); // menemukan id data yang dicari untuk diedit
        return view('dashboard.edit.editbidanghukum', compact('bidanghukum'));
    }
    public function update(Request $request,$id){
        
        $this->validate($request, [
            'nama_bid_hukum'    =>  'required',
            'keterangan'     =>  'required'
        ]);
        $bidanghukum = BidangHukum::find($id);
        // dd($request,$id);      
        $bidanghukum->nama_bid_hukum=$request->get('nama_bid_hukum');
        $bidanghukum->keterangan=$request->get('keterangan');
        $bidanghukum->save();
        Alert::success('Berhasil', 'Data Berhasil Di Update');
        return redirect()->route('table');
    }
    public function hapus_bidanghukum($id)
    {
        $bidanghukum = BidangHukum::find($id);
        $bidanghukum->delete();
        Alert::success('Berhasil', 'Data Berhasil Di Hapus')->persistent("Ok");
        return redirect()->route('table');
    }
    
    
    
}