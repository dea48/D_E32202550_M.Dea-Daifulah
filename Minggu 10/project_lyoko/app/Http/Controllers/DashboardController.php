<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

class DasboardController extends Controller
{
    public function index()
    {
       return view('backend.dashboard')
    }

}
