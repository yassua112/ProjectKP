<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Konsultasi;
use Alert;
class KonsultasiController extends Controller
{
    public function index()
    {
        $data_konsultasi = Konsultasi::all();
        return view('dashboard.konsultasi',['data_konsultasi'=>$data_konsultasi]);
    }
    
    public function tambah_konsultasi()
    {
        $konsultasi = Konsultasi::get();
        return view('kontakkami',compact('nama','email','subjek','deskripsi_konsultasi'));
    //  \App\BidangHukum::create($request->all());
    //  return redirect('/dashboard.table')->with('sukses','Data berhasil diinputkan!');
    }
    
    public function bidang_pref(Request $request)    {
        $konsultasi = new Konsultasi;
        $konsultasi->nama = $request->nama;
        $konsultasi->email = $request->email;
        $konsultasi->subjek = $request->subjek;
        $konsultasi->deskripsi_konsultasi = $request->deskripsi_konsultasi;
        $konsultasi->save();
        Alert::success('Berhasil', 'Terima Kasih telah berkonsultasi via website, Selanjutnya kami akan membalas konsultasi anda via email')->persistent("Ok");//menampilkan pesan berhasil jika data berhasil di tambahkan
        return redirect()->route('konsultasi.create');
    }
    /*
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
        return redirect()->route('data');
    }
    public function hapus_bidanghukum($id)
    {
        $bidanghukum = BidangHukum::find($id);
        $bidanghukum->delete();
        Alert::success('Berhasil', 'Data Berhasil Di Hapus')->persistent("Ok");
        return redirect()->route('table');
    }
    
    
    */
}