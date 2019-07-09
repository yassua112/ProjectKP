<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidangHukumController extends Controller
{
    public function index()
    {
    	$data_bidang_hukum = \App\BidangHukum::all();
    	return view('dashboard.table',['data_bidang_hukum'=>$data_bidang_hukum]);
    }

    public function create()
    {
    	return view('dashboard.inputbidanghukum');
    //	\App\BidangHukum::create($request->all());
    //	return redirect('/dashboard.table')->with('sukses','Data berhasil diinputkan!');
    }
    public function prosesinput(Request $request)
    {
		\App\BidangHukum::prosesinput($request->all());
    	return redirect('/dashboard.table')->with('sukses','Data berhasil diinputkan!');
    }

    public function edit($id) {
        $bidang_hukum = \App\BidangHukum::find($id); // menemukan id data yang dicari untuk diedit
        return view('dashboard.editbidanghukum',['bidang_hukum'=>$bidang_hukum]);
    }
}
