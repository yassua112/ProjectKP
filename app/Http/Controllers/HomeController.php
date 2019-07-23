<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deskripsi;
use App\Lawyers;
use App\Artikel;
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

    public function bidang_hukum(){
        $bidang = Deskripsi::get();
        return view('bidanghukum', ['data' => $bidang]);
    }

    public function bidang_hukum_show($id){
        $bidang = Deskripsi::where('id_desk',$id)->first();
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


}
