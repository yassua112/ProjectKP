<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PetinggiController extends Controller
{
    public function petinggi1(){ //metjod viwe dari tampilan utama dashboard penambahan kariawan
        return view("sub.petinggi.petinggi1");
    }
    public function petinggi2(){ //metjod viwe dari tampilan utama dashboard penambahan kariawan
        return view("sub.petinggi.petinggi2");
    }
    public function petinggi3(){ //metjod viwe dari tampilan utama dashboard penambahan kariawan
        return view("sub.petinggi.petinggi3");
    }
}