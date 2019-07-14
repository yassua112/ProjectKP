<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BidangHukum;

class BidangHukumController extends Controller
{
    public function index()
    {
    	$data_bidang_hukum = BidangHukum::all();
    	return view('dashboard.table',['data_bidang_hukum'=>$data_bidang_hukum]);
    }

    public function bidH_create()
    {
        $bidangHukum = BidangHukum::get();
    	return view('dashboard.inputbidanghukum',compact('nama_bid_hukum','keterangan'));
    //	\App\BidangHukum::create($request->all());
    //	return redirect('/dashboard.table')->with('sukses','Data berhasil diinputkan!');
    }
    public function bidang_pref(Request $request)    {
        $user = auth()->user();
        $bidanghukum = new BidangHukum;
        $bidanghukum->nama_bid_hukum = $request->nama_bid_hukum;
        $bidanghukum->keterangan=$request->keterangan;
        $bidanghukum->id_admin=$user->id_admin;
        $bidanghukum->save();

        return redirect()->route('table.create')->with('sukses','Data berhasil diinputkan!');
    }

    public function edit($id) {
        $bidanghukum = BidangHukum::find($id); // menemukan id data yang dicari untuk diedit
        return view('dashboard.editbidanghukum', compact('bidanghukum'));
    }

    public function update(Request $request,$id){ 
        $this->validate($request, [
            'nama_bid_hukum'    =>  'required',
            'keterangan'     =>  'required'
        ]);
        $bidanghukum = BidangHukum::find($id);
        // dd($request,$id);       
      
        $bidanghukum->nama_bid_hukum=$request->get('nama_bid_hukum');
        $bidanghukum->keterangan=$request->keterangan;
        $bidanghukum->save();
        return redirect()->route('table')->with('sukses','Data berhasil diUpdate!');
    }

    public function destroy($id)
    {
        $bidanghukum = BidangHukum::find($id);
        $bidanghukum->delete();
        return redirect()->route('table')->with('success', 'Data Deleted');
    }
    
}
