<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\BidangHukum;
use App\Lawyers;
class DashboardController extends AdminController
{
    public function index()
    {
        $data_bidang_hukum = BidangHukum::all();
        $lawyers = Lawyers::all();
        return view('dashboard.index',['data_bidang_hukum'=>$data_bidang_hukum,'lawyers'=>$lawyers]);
    }
}
