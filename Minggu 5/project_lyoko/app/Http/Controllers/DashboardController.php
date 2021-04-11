<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controller\Controller;

class dasboardController extends Controller
{
    public function index()
    {
       return view('backend.dasboard')
    }

}
