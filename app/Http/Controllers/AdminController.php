<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Admin;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * 
     */

   

    public function __construct()
    {
        $this->middleware(Admin::class);
    }
    
}
