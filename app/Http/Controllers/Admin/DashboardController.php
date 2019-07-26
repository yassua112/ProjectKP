<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Dokumentasi;
use App\BidangHukum;
use App\Lawyers;
use App\Artikel;
class DashboardController extends AdminController
{
    public function index()
    {
        $data_bidang_hukum = BidangHukum::paginate(5);
        $lawyers = Lawyers::paginate(5);
        $artikel = Artikel::paginate(5);
        $dokumentasi = Dokumentasi::paginate(5);
        return view('dashboard.index',['data_bidang_hukum'=>$data_bidang_hukum,'lawyers'=>$lawyers,'artikel'=>$artikel,'dokumentasi'=>$dokumentasi]);
    }
}