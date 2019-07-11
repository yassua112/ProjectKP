<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
