<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ArtikelHukumController extends Controller
{
	public function index()
	{
		
		// mengirim data artikel hukum ke view index
		return view('detailartikel');
	}
}
?>