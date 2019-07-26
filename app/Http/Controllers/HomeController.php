<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deskripsi;
use App\Lawyers;
use App\Artikel;
use App\Dokumentasi;
use Response;
class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function artikelhukum(){
        
        $artikel =Artikel::paginate(5);    
        return view('artikelhukum',['data'=>$artikel]);
    }

    public function artikel_show($id){
        $artikel = Artikel::where('judul_artikel',$id)->first();
        return view('sub.desk-artikel',['data'=>$artikel]);
    }

    public function dokumentasikegiatan(){
        $dokumentasi = Dokumentasi::paginate(5);
        $artikel= Artikel::orderBy('created_at','asc')->paginate(5);    
        return view('dokumentasi',['data'=>$dokumentasi,'artikel'=>$artikel]);
    }

    public function dokumentasi_show($id){
        $dokumentasi = Dokumentasi::where('judul_dokumentasi',$id)->first();
        return view('sub.desk-dokumentasi',['data'=>$dokumentasi]);
    }



    public function bidang_hukum(){
        $bidang = Deskripsi::get();
        return view('bidanghukum', ['data' => $bidang]);
    }

    public function bidang_hukum_show($id){
        $bidang = Deskripsi::where('Nama_bid_hukum',$id)->first();
        return view('sub.desk-bidang', ['data' => $bidang]);
    }




    public function lawyers(){
        $nama = Lawyers::get();
        return view('lawyers',['data'=>$nama]);
    }

    public function lawyers_show($id){
        $nama = Lawyers::where('NIP',$id)->first();
        return view('sub.desk-lawyers',['data'=>$nama]);
    }

    // public function download($id){

    //     $download = Lawyers::table('fileCV')->where('fileCV',$id)->get();
    //     return view ('lawyers',compact('downloads'));
    // }

}
