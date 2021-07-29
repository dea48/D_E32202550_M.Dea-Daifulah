<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    //
}
	public function index()
	{
		return view('backend.pendidikan.create',compact('pendidikan'));
}		
public function create()
{
		$pendidikan = null;
		return view('backend.pendidikan.create',compact('pendidikan'));
}		
public function store(Request $request)
{
	pendidikan::create($request->all());

	return redirect()->route('pendidikan.index')
					->with('succsess','Data Pendidikan baru telah berhasil disimpan.');
}						