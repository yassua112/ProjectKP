<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArtikelHukumController extends Controller
{
	public function index()
	{
		// mengambil data dari table artikel hukum
		$artikelhukum = DB::table('tb_artikelhukum')->get();

		// mengirim data artikel hukum ke view index
		return view('artikelhukum',['tb_artikelhukum'=>$artikelhukum]);

	}
}
?>