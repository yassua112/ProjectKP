<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class DokumentasiController extends AdminController
{
    public function index(){

        return view('dashboard.gambar');
    }
}
