<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Deskripsi;
use App\kariawan;
class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function artikelhukum(){
        return view('artikel.hukum');
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
        $nama = kariawan::get();
        return view('lawyers',['data'=>$nama]);
    }
    public function lawyers_show($id){
        $nama = kariawan::where('nip',$id)->first();
        return view('sub.desk-lawyers',['data'=>$nama]);
    }
}
