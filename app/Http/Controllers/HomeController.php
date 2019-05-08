<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deskripsi;

class HomeController extends Controller
{
    public function index(){

        return view('index');
    }

    public function bidang_hukum(){

        $bidang = Deskripsi::get();

        return view('bidanghukum', ['data' => $bidang]);
    }

    public function bidang_hukum_show($id){

        $bidang = Deskripsi::where('id_desk',$id)->first();

        return view('sub.desk-bidang', ['data' => $bidang]);
    }
}
